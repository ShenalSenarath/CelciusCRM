<?php
if (! defined ( 'BASEPATH' ))
	exit ( 'No direct script access allowed' );
class Products extends CI_Controller {
	
	function index() {
		$this->load->model('producttypesmodel');
		$this->load->model('productdetailsmodel');
		
		$productTypes=$this->producttypesmodel->getAll();
		$productDetails=$this->productdetailsmodel->getAll();
		
		
		$templateData = array (
				'productTypes'=>$productTypes,
				'productDetails'=>$productDetails,
				'title' => "Products",
				'Username' => "HardCodedUser",
				'viewName' => "product_view"
		);
		
		$this->load->view ( '/includes/template', $templateData );
		
	}
	
	function add() {
		$this->load->library ( 'form_validation' );
		
		
		$this->form_validation->set_rules ( 'ProductName', 'Product Name', 'trim|required' );
		$this->form_validation->set_rules ( 'Size', 'Size', 'trim|required' );
		$this->form_validation->set_rules ( 'Material', 'Matrial', 'trim|required' );
		$this->form_validation->set_rules ( 'ThreadCount', 'Thread Count', 'trim|required|integer' );
		
		$this->load->model('producttypesmodel');
		$ProductTypes= $this->producttypesmodel->getAll();
			
		$dropdownData = array();
			
		foreach ($ProductTypes as $type ){
			$dropdownData[$type->ID] = $type->ProductType;
		}
		
		$templateData = array (
				'dropdown'=>$dropdownData,
				'title' => "Add New Product",
				'Username' => "HardCodedUser",
				'viewName' => "addProduct_view" 
		);
		
		if ($this->form_validation->run () == FALSE) {
			$this->load->view ( '/includes/template', $templateData );
		} 
		
		
		else {
			
			
			$this->load->model ( 'productdetailsmodel' );

			$ProductDetails=$this->input->post ();
			
			if ($insertedID = $this->productdetailsmodel->addProduct($ProductDetails)) {
				redirect ( '/products', 'refresh' );
			} else {
				$this->load->view ( '/includes/template', $templateData );
			}
		}
	}
}