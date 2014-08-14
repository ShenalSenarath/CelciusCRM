<?php
if (! defined ( 'BASEPATH' ))
	exit ( 'No direct script access allowed' );
class HotelChains extends CI_Controller {
	
	function index() {
		$this->load->model ( 'hotelchaindetailsmodel' );
		$allHotelChains = $this->hotelchaindetailsmodel->getAll ();
		
		$templateData = array (
				'data' => $allHotelChains,
				'title' => "Hotel Chains",
				'Username' => "HardCodedUser",
				'viewName' => "hotelchains_view" 
		);
		
		$this->load->view ( '/includes/template', $templateData );
	}
	
	function view($ChainID) {
		$this->load->model ( 'hotelchaindetailsmodel' );
		$this->load->model ( 'hoteldetailsmodel' );
		$this->load->model ( 'contactsmodel' );
		
		$hotelChainDetails = $this->hotelchaindetailsmodel->getHotelChain ( $ChainID );
		$hotelsByChain = $this->hoteldetailsmodel->getHotelByHotelChain ( $ChainID );
		$contactsByChain = $this->contactsmodel->getContactsByHotelChain ( $ChainID );
		
		
		$templateData = array (
				
				'chainDetails' => $hotelChainDetails,
				'hotels' => $hotelsByChain,
				'contacts' => $contactsByChain,
				'title' => ($hotelChainDetails [0]->ChainName) . " - Hotel Chain",
				'Username' => "HardCodedUser",
				'viewName' => "hotelchain_view" 
		);
		$this->load->view ( '/includes/template', $templateData );
		// print_r($templateData);
	}
}