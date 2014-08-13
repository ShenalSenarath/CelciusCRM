<?php

if (! defined ( 'BASEPATH' ))
	exit ( 'No direct script access allowed' );
class HotelDetailsModel extends CI_Model {
	function getAll() {
		$query = $this->db->get ( 'HotelDetails' );
		return $query->result ();
	}
	function addHotel($HotelDetail) {
		$this->db->insert ( 'HotelDetails', $HotelDetail );
	}
	function updateHotel($id, $HotelDetails) {
		$this->db->where ( 'ID', $id );
		$this->db->update ( 'HotelDetails', $HotelDetails );
	}
	function deleteHotel($id) {
		$this->db->where ( 'ID', $id );
		$this->db->delete ( 'HotelDetails' );
	}
	function getHotel($id) {
		$this->db->where ( 'ID', $id );
		$query = $this->db->get ( 'HotelDetails' );
		return $query->result ();
	}
	function getHotelByHotelChain($chainId) {
		$this->db->where ( 'HotelChainID', $chainId );
		$query = $this->db->get ( 'HotelDetails' );
		return $query->result ();
	}
	
}

