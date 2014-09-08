<?php
if (! defined ( 'BASEPATH' ))
	exit ( 'No direct script access allowed' );
/**
 *
 * @author Shenal Senarath
 *        
 *         This controller will be used to user details related operations
 */
class Users extends CI_Controller {
	public function __construct() {
		parent::__construct ();
		checkloggedin ();
	}
	/**
	 * Views all the contacts in the system
	 */
	function index() {
		$this->load->model ( 'usersmodel' );
		
		$allUsers = $this->usersmodel->getAll ();
		
		$templateData = array (
				'users' => $allUsers,
				'title' => "Users",
				'Username' =>  getUsername (),
				'viewName' => "users_view" 
		);
		
		$this->load->view ( '/includes/template', $templateData );
	}
	
	/**
	 * View the details of the hotel given by the $HotelID
	 *
	 * @param int $HotelID        	
	 */
	function view($HotelID) {
		$this->load->model ( 'hoteldetailsmodel' );
		$this->load->model ( 'contactsmodel' );
		
		$hotelDetails = $this->hoteldetailsmodel->getHotel ( $HotelID );
		$contactsByHotel = $this->contactsmodel->getContactsByHotel ( $HotelID );
		
		$templateData = array (
				
				'hotelDetails' => $hotelDetails,
				'contacts' => $contactsByHotel,
				'title' => ($hotelDetails [0]->HotelName) . " - Hotel",
				'Username' =>  getUsername (),
				'viewName' => "hotel_viewt" 
		);
		$this->load->view ( '/includes/template', $templateData );
	}
	function add() {
		$this->load->library ( 'form_validation' );
		
		$this->form_validation->set_rules ( 'Username', 'Username', 'trim|required|alpha_dash|is_unique[UserDetails.Username]' );
		$this->form_validation->set_rules ( 'Email', 'E-mail', 'trim|valid_email|required|is_unique[UserDetails.Email]' );
		$this->form_validation->set_message ( 'is_unique', 'An account with this %s is present' );
		
		$templateData = array (
				
				'title' => "Add New User",
				'Username' =>  getUsername (),
				'viewName' => "addUser_view" 
		);
		
		if ($this->form_validation->run () == FALSE) {
			$this->load->view ( '/includes/template', $templateData );
		} 

		else {
			
			$this->load->model ( 'usersmodel' );
			
			$UserDetails = $this->input->post ();
			$UserDetails ['IsReset'] = 1;
			$UserDetails ['PasswordHash'] = NULL;
			
			if ($insertedID = $this->usersmodel->addUser ( $UserDetails )) {
				redirect ( '/users', 'refresh' );
			} else {
				$this->load->view ( '/includes/template', $templateData );
			}
		}
	}
}