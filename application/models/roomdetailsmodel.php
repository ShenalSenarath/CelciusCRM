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
	function getRoomTypeDetails($roomTypeID){
		$this->db->where("ID",$roomTypeID);
		$query = $this->db->get ( 'RoomDetails' );
		return $query->result ();
	}
	function addRoom($RoomDetails) {
		$this->db->insert ( 'RoomDetails', $RoomDetails );
		return $this->db->insert_id();
	}
	function getProductsByRoomType($roomTypeID){
		$this->db->select ( '
				RoomProductDetails.*,
				ProductDetails.*,
				ProductDetails.ID as PDID,
				ProductTypes.ID as PTID,
				ProductTypes.ProductType
				
				');//A work around to ID replacing problem in CI Active Records
		$this->db->from ( 'RoomProductDetails' );
		$this->db->where('RoomProductDetails.RoomID',$roomTypeID);
		$this->db->join ( 'ProductDetails', 'RoomProductDetails.ProductID=ProductDetails.ID', 'left outer' );//Joined to add details about the hotel's mother chain
		$this->db->join ( 'ProductTypes', 'ProductDetails.ProductType=ProductTypes.ID', 'left outer' );
		$query = $this->db->get ();
		return $query->result ();
	}
	function updateRoom($id, $RoomDetails) {
		$this->db->where ( 'ID', $id );
		$this->db->update ( 'RoomDetails', $RoomDetails );
	}
	function deleteRoom($id) {
		$this->db->where ( 'ID', $id );
		$this->db->delete ( 'RoomDetails' );
	}
	function addRoomProduct($RoomProductDetails){
		$this->db->insert ( 'RoomProductDetails', $RoomProductDetails );
		return $this->db->insert_id();
	}
}

