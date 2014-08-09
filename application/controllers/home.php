<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	
	public function index()
	{
		
		$this->load->view('home_view');

	}
	
	public function addHotel(){
		$data = array(
			'HotelName'=> $this->input->post('HotelName'),
			'Address'=> $this->input->post('Address')
		);
		$this->load->model('hoteldetailsmodel');
		$this->hoteldetailsmodel->addHotel($data);
		$this->index();	
		
		
	}
}


