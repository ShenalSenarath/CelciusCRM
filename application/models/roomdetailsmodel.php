<?php

if (! defined ( 'BASEPATH' ))
	exit ( 'No direct script access allowed' );
class RoomDetailsModel extends CI_Model {
	function getAll() {
		$query = $this->db->get ( 'RoomDetails' );
		return $query->result ();
	}
	function addRoom($RoomDetails) {
		$this->db->insert ( 'RoomDetails', $RoomDetails );
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

