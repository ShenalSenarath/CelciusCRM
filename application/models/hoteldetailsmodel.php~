<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class HotelDetailsModel extends CI_Controller {

	function getAll(){
		$query = $this->db->get('HotelDetails');
		return $query->result();	
	}
	
	function addHotel($HotelDetail){
		$this ->db->insert('HotelDetails',$HotelDetail);	
	}

	function updateHotel($id){
		$this->db->where('ID',$id);
		$this ->db->update('HotelDetails',$HotelDetails);	
	}

	function deleteHotel($id){
		$this->db->where('ID',$id);
		$this->db->delete('HotelDetails');
	}

}

