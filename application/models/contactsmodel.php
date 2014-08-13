<?php

if (! defined ( 'BASEPATH' ))
	exit ( 'No direct script access allowed' );
class ContactsModel extends CI_Model {
	function getAll() {
		$query = $this->db->get ( 'ContactsDetails' );
		return $query->result ();
	}
	function addContact($ContactDetails) {
		$this->db->insert ( 'ContactsDetails', $ContactDetails );
	}
	function updateContact($id, $ContactDetails) {
		$this->db->where ( 'ID', $id );
		$this->db->update ( 'ContactsDetails', $ContactDetails );
	}
	function deleteContact($id) {
		$this->db->where ( 'ID', $id );
		$this->db->delete ( 'ContactsDetails' );
	}
	function getContactsByHotel($hotelID){
		$this->db->where("HotelID",$hotelID);
		$query = $this->db->get ( 'ContactsDetails' );
		return $query->result ();
		
	}
	function getContactsByHotelChain($chainID){
		$this->db->where("ChainID",$chainID);
		$query = $this->db->get ( 'ContactsDetails' );
		return $query->result ();
	
	}
}

