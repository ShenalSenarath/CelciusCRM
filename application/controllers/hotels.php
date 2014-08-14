<?php
if (! defined ( 'BASEPATH' ))
	exit ( 'No direct script access allowed' );
class Hotels extends CI_Controller {
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