<?php
if (! defined ( 'BASEPATH' ))
	exit ( 'No direct script access allowed' );
class HotelChains extends CI_Controller {
	function index() {
		
		$this->load->model ( 'hotelchaindetailsmodel' );
		$all = $this->hotelchaindetailsmodel->getAll ();
		
		$templateData = array (
				'data' => $all,
				'title' => "Hotel Chains",
				'Username' => "HardCodedUser",
				'viewName' => "hotelchains_view" 
		);
		
		$this->load->view ( '/includes/template', $templateData );
	}
	
	function view($ChainID) {
		$this->load->model ( 'hotelchaindetailsmodel' );
		$this->load->model ( 'hoteldetailsmodel' );
		$hotelChainDetails = $this->hotelchaindetailsmodel->getHotelChain ( $ChainID );
		$hotels =$this->hoteldetailsmodel->getHotelByHotelChain($ChainID);
		print_r($hotelChainDetails);
		print_r($hotels);
		
		$templateData = array (
				'data' => $all,
				'title' => ($hotelChainDetails[0]->ChainName)."Hotel Chain",
				'Username' => "HardCodedUser",
				'viewName' => "hotelchain_view"
		);
		
	} 
}