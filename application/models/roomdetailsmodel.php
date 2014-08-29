<?php

if (! defined ( 'BASEPATH' ))
	exit ( 'No direct script access allowed' );
class RoomDetailsModel extends CI_Model {
	function getAll() {
		$query = $this->db->get ( 'RoomDetails' );
		return $query->result ();
	}
	
	function getRoomTypesByHotel($hotelID){
		$this->db->where("HotelID",$hotelID);
		$query = $this->db->get ( 'RoomDetails' );
		return $query->result ();
		
	}
	function addRoom($RoomDetails) {
		$this->db->insert ( 'RoomDetails', $RoomDetails );
		return $this->db->insert_id();
	}
	function updateRoom($id, $RoomDetails) {
		$this->db->where ( 'ID', $id );
		$this->db->update ( 'RoomDetails', $RoomDetails );
	}
	function deleteRoom($id) {
		$this->db->where ( 'ID', $id );
		$this->db->delete ( 'RoomDetails' );
	}
}

