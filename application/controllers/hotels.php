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
}