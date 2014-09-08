<?php
if (! defined ( 'BASEPATH' ))
	exit ( 'No direct script access allowed' );
/**
 *
 * @author Shenal Senarath
 *        
 *         This controller will be used to contacts related operations
 */
class RoomTypes extends CI_Controller {
	public function __construct() {
		parent::__construct ();
		checkloggedin ();
	}
	function view($roomTypeID) {
		$this->load->model ( 'hoteldetailsmodel' );
		$this->load->model ( 'productTypesmodel' );
		$this->load->model ( 'roomdetailsmodel' );
	
		$roomTypeDetails=$this->roomdetailsmodel->getRoomTypeDetails($roomTypeID);
		$productTypes=$this->productTypesmodel->getall();
		$hotelDetails = $this->hoteldetailsmodel->getHotel ( $roomTypeDetails[0]->HotelID );
		$productsOfRoom=$this->roomdetailsmodel->getProductsByRoomType($roomTypeID);
		
		
		$templateData = array (
				
				'hotelDetails' => $hotelDetails,
				'roomTypeDetails' =>$roomTypeDetails,
				'roomProducts' => $productsOfRoom,
				'productTypes'=>$productTypes,
				'title' => ($roomTypeDetails [0]->RoomType) ." - ".($hotelDetails[0]->HotelName) ." Hotel",
				'Username' =>  getUsername (),
				'viewName' => "roomtype_view" 
		);
		
		$this->load->view ( '/includes/template', $templateData );
	}
	
	
	function add($HotelID) {
		$this->load->library ( 'form_validation' );
		
		$this->form_validation->set_rules ( 'RoomType', 'Room Type', 'trim|required' );
		$this->form_validation->set_rules ( 'Count', 'Count', 'trim|required|is_natural' );
		
		$this->load->model ( 'hoteldetailsmodel' );
		$hotelDetails = $this->hoteldetailsmodel->getHotel ( $HotelID );
		
		$templateData = array (
				
				'hotelDetails' => $hotelDetails,
				'title' => "Add Room type - " . ($hotelDetails [0]->HotelName),
				'Username' =>  getUsername (),
				'viewName' => "addRoomType_view" 
		);
		
		if ($this->form_validation->run () == FALSE) {
			$this->load->view ( '/includes/template', $templateData );
		} 

		else {
			
			$this->load->model ( 'roomdetailsmodel' );
			
			$RoomTypeDetails = $this->input->post ();
			
			if ($insertedID = $this->roomdetailsmodel->addRoom ( $RoomTypeDetails )) {
				redirect ( '/roomTypes/view/' . $insertedID, 'refresh' );
			} else {
				$this->load->view ( '/includes/template', $templateData );
			}
		}
	}
}