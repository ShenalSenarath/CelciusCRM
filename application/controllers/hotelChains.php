<?php
if (! defined ( 'BASEPATH' ))
	exit ( 'No direct script access allowed' );
/**
 *
 * @author Shenal Senarath
 *        
 *         This controller will be used to hotel chain related operations
 */
class HotelChains extends CI_Controller {
	
	/**
	 * Will show all the hotel chains
	 */
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
	
	/**
	 * Display details of a Hotel Chain with the $ChainID
	 * This include viewing member hotels, contacts.
	 *
	 * @param int $ChainID        	
	 */
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
	}
	
	/**
	 * New hotelchain adding form wil be handled by this
	 */
	function add() {
		$this->load->library ( 'form_validation' );
		
		$this->form_validation->set_rules ( 'ChainName', 'Chain Name', 'trim|required' );
		$this->form_validation->set_rules ( 'HeadOfficeAddress', 'Office Address', 'trim|required' );
		
		$templateData = array (

				'title' => "Add new Hotel Chain",
				'Username' => "HardCodedUser",
				'viewName' => "addHotelChain_view" 
		);
		
		
		
		if ($this->form_validation->run () == FALSE) {
			$this->load->view ( '/includes/template', $templateData );
		} 

		else {
			$this->load->model ( 'hotelchaindetailsmodel' );
			
			$HotelChainDetail=array(
				'ChainName'=>$this->input->post('ChainName'),
				'HeadOfficeAddress'=>$this->input->post('HeadOfficeAddress')	
			);
			if ($insetedID = $this->hotelchaindetailsmodel->addHotelChain ( $HotelChainDetail )) {
				redirect('/hotelChains/view/'.$insetedID, 'refresh');
				
			} 
			else {
				$this->load->view ( '/includes/template', $templateData );
			}
			
		}
	}
}