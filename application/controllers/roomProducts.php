<?php
if (! defined ( 'BASEPATH' ))
	exit ( 'No direct script access allowed' );
/**
 *
 * @author Shenal Senarath
 *        
 *         This controller will be used to room prducts related operations
 */
class roomProducts extends CI_Controller {
	
	function add($roomTypeID, $productTypeID) {
		
		$this->load->library ( 'form_validation' );
		
		$this->form_validation->set_rules ( 'Count', 'Count', 'trim|required|is_natural' );
		$this->form_validation->set_rules ( 'ParValue', 'Par Value', 'trim|required|decimal' );
		
		$this->load->model('roomdetailsmodel');
		$roomDetails=$this->roomdetailsmodel->getRoomTypeDetails($roomTypeID);
		
		
		
		$this->load->model ( 'hoteldetailsmodel' );
		$hotelDetails = $this->hoteldetailsmodel->getHotel ( $roomDetails[0]->HotelID );
		
		$this->load->model ( 'producttypesmodel' );
		$productTypeDetails = $this->producttypesmodel->getProductypeDetails($productTypeID);
		
		$this->load->model ( 'productdetailsmodel' );
		$productsDetails = $this->productdetailsmodel->getProductsByType($productTypeID);
		
		
		
		$productsDropdownData = array();
			
		foreach ($productsDetails as $product ){
			$productsDropdownData[$product->ID] = $product->ProductName." ".$product->Size." ".$product->Material." ".$product->ThreadCount;
		}
		
		
		
		$templateData = array (
				
				'hotelDetails' => $hotelDetails,
				'roomDetails' => $roomDetails,
				'typeDetails' =>$productTypeDetails,
				'productsDropdownData'=>$productsDropdownData,
				'title' => "Add Product - " .$productTypeDetails[0]->ProductType."s - ". ($roomDetails[0]->RoomType)." - ".($hotelDetails [0]->HotelName),
				'Username' => "HardCodedUser",
				'viewName' => "addRoomProduct_view" 
		);
		
		if ($this->form_validation->run () == FALSE) {
			$this->load->view ( '/includes/template', $templateData );
		} 

		else {
			
			$this->load->model ( 'roomdetailsmodel' );
			
			$RoomProductDetails = $this->input->post ();
			print_r($roomDetails[0]->ID);
			$RoomProductDetails['RoomID']=$roomDetails[0]->ID;
			
			if ($insertedID = $this->roomdetailsmodel->addRoomProduct ( $RoomProductDetails )) {
				redirect ( '/roomTypes/view/' . $roomDetails[0]->ID, 'refresh' );
			} else {
				$this->load->view ( '/includes/template', $templateData );
			}
		}
	}
}