<?php
if (! defined ( 'BASEPATH' ))
	exit ( 'No direct script access allowed' );
/**
 *
 * @author Shenal Senarath
 *        
 *         This controller will be used to contacts related operations
 */
class Contacts extends CI_Controller {
	/**
	 * Views all the contacts in the system
	 */
	function index() {
		$this->load->model ( 'contactsmodel' );
		
		$allContacts = $this->contactsmodel->getAll ();
		
		$templateData = array (
				'contacts' => $allContacts,
				'title' => "Contacts",
				'Username' => "HardCodedUser",
				'viewName' => "contacts_view" 
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
				'Username' => "HardCodedUser",
				'viewName' => "hotel_view" 
		);
		$this->load->view ( '/includes/template', $templateData );
	}
	function add() {
		$this->load->library ( 'form_validation' );
		
		$this->form_validation->set_rules ( 'Position', 'Position', 'trim|required' );
		$this->form_validation->set_rules ( 'Name', 'Name', 'trim|required' );
		$this->form_validation->set_rules ( 'Email', 'E-mail', 'trim|valid_email' );
		$this->form_validation->set_rules ( 'OfficeNumber', 'Office Number', 'trim' );
		$this->form_validation->set_rules ( 'MobileNumber', 'Mobile Number', 'trim' );
		
		$this->load->model ( 'hotelchaindetailsmodel' );
		$hotelChains = $this->hotelchaindetailsmodel->getAll ();
			
		$hotelChaindropdownData = array ();
		$hotelChaindropdownData[NULL]='Not in a Hotel Chain';
		foreach ( $hotelChains as $chain ) {
			$hotelChaindropdownData [$chain->ID] = $chain->ChainName;
		}
		
		$this->load->model ( 'hoteldetailsmodel' );
		$hotels = $this->hoteldetailsmodel->getAll ();
		
		$hoteldropdownData = array ();
		$hoteldropdownData[NULL]='No Hotel (Head Office)';
		
		foreach ( $hotels as $hotel ) {
			$hoteldropdownData [$hotel->HID] = $hotel->HotelName;
		}
		
		$templateData = array (
				'chainDropdown' => $hotelChaindropdownData,
				'hotelDropdown' => $hoteldropdownData,
				'title' => "Add New Product",
				'Username' => "HardCodedUser",
				'viewName' => "addContact_view" 
		);
		
		if ($this->form_validation->run () == FALSE) {
			$this->load->view ( '/includes/template', $templateData );
		} 

		else {
			
			$this->load->model ( 'contactsmodel' );
			
			$ContactDetails = $this->input->post ();
			
			foreach ($ContactDetails as $key=>$field){
				if (empty($field)){
					
					unset($ContactDetails[$key]);
				}
				
			}
			
			print_r($ContactDetails);
			
			if ($insertedID = $this->contactsmodel->addContact($ContactDetails)) {
				redirect ( '/contacts', 'refresh' );
			} else {
				$this->load->view ( '/includes/template', $templateData );
			}
		}
	}
}