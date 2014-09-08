<?php
if (! defined ( 'BASEPATH' ))
	exit ( 'No direct script access allowed' );
class ProductTypes extends CI_Controller {
	public function __construct() {
		parent::__construct ();
		checkloggedin ();
	}
	function add() {
		$this->load->library ( 'form_validation' );
		
		$this->form_validation->set_rules ( 'ProductType', 'Product Type', 'trim|required' );
		
		$templateData = array (
				
				'title' => "Add New Product Type",
				'Username' =>  getUsername (),
				'viewName' => "addProductType_view" 
		);
		
		if ($this->form_validation->run () == FALSE) {
			$this->load->view ( '/includes/template', $templateData );
		} 

		else {
			$this->load->model ( 'producttypesmodel' );
			
			$HotelChainDetail = array (
					'ProductType' => $this->input->post ( 'ProductType' ) 
			);
			if ($insetedID = $this->producttypesmodel->addProductType ( $HotelChainDetail )) {
				redirect ( '/productTypes/view/' . $insetedID, 'refresh' );
			} else {
				$this->load->view ( '/includes/template', $templateData );
			}
		}
	}
}