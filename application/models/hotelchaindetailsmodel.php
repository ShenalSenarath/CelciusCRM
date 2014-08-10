<?php

if (! defined ( 'BASEPATH' ))
	exit ( 'No direct script access allowed' );
class HotelChainDetailsModel extends CI_Model {
	function getAll() {
		$query = $this->db->get ( 'HotelChainDetails' );
		return $query->result ();
	}
	function addHotelChain($HotelChainDetail) {
		$this->db->insert ( 'HotelChainDetails', $HotelChainDetail );
	}
	function updateHotelChain($id, $HotelChainDetail) {
		$this->db->where ( 'ID', $id );
		$this->db->update ( 'HotelChainDetails', $HotelChainDetail );
	}
	function deleteHotelChain($id) {
		$this->db->where ( 'ID', $id );
		$this->db->delete ( 'HotelChainDetails' );
	}
}

