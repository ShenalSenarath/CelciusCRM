<?php
if (! defined ( 'BASEPATH' ))
	exit ( 'No direct script access allowed' );
/**
 * @author Shenal Senarath
 *
 *This controller will be used to hotel related operations
 */
class Hotels extends CI_Controller {
	/**
	 * Views all the hotels in the system
	 */
	function index() {
		$this->load->model ( 'hoteldetailsmodel' );
		$allHotels = $this->hoteldetailsmodel->getAll ();
		
		$templateData = array (
				'data' => $allHotels,
				'title' => "Hotels",
				'Username' => "HardCodedUser",
				'viewName' => "hotels_view" 
		);
		
		$this->load->view ( '/includes/template', $templateData );
	}
	
	/**
	 * View the details of the hotel given by the $HotelID
	 * @param int $HotelID
	 */
	function view($HotelID) {
		$this->load->model ( 'hoteldetailsmodel' );
		$this->load->model ( 'contactsmodel' );
		$this->load->model ( 'roomdetailsmodel' );
		
		$hotelDetails = $this->hoteldetailsmodel->getHotel ( $HotelID );
		$contactsByHotel = $this->contactsmodel->getContactsByHotel ( $HotelID );
		$roomTypesByHotel=$this->roomdetailsmodel->getRoomTypesByHotel($HotelID);
		
		 
		$templateData = array (
				
				'hotelDetails' => $hotelDetails,
				'roomTypes'=>$roomTypesByHotel,
				'contacts' => $contactsByHotel,
				'title' => ($hotelDetails [0]->HotelName) . " - Hotel",
				'Username' => "HardCodedUser",
				'viewName' => "hotel_view" 
		);
		$this->load->view ( '/includes/template', $templateData );
	}
	
	function add() {
		
		$this->load->library ( 'form_validation' );
	
		$this->form_validation->set_rules ( 'HotelName', 'Hotel Name', 'trim|required' );
		$this->form_validation->set_rules ( 'Address', 'Address', 'trim|required' );
		
		$this->load->model('hotelChaindetailsmodel');
		$HotelChainDetails= $this->hotelChaindetailsmodel->getAll();
		
		$dropdownData = array();
		$dropdownData[NULL]='No Hotel Chain';
		foreach ($HotelChainDetails as $chain ){
			$dropdownData[$chain->ID] = $chain->ChainName;
		}
		
	
		$templateData = array (
				'dropdown'=>$dropdownData,
				'title' => "Add New Hotel",
				'Username' => "HardCodedUser",
				'viewName' => "addHotel_view"
		);
	
	
	
		if ($this->form_validation->run () == FALSE) {
			$this->load->view ( '/includes/template', $templateData );
		}
	
		else {
			$this->load->model ( 'hoteldetailsmodel' );
				
			$HotelDetail = $this->input->post ();
				
			foreach ($HotelDetail as $key=>$field){
				if (empty($field)){
						
					unset($HotelDetail[$key]);
				}
			
			}
			
			if ($insetedID = $this->hoteldetailsmodel->addHotel ( $HotelDetail )) {
				redirect('/hotels/view/'.$insetedID, 'refresh');
	
			}
			else {
				$this->load->view ( '/includes/template', $templateData );
			}
				
		}
	}
}