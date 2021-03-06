<?php

if (! defined ( 'BASEPATH' ))
	exit ( 'No direct script access allowed' );



/**
 * @author Shenal Senarath
 *
 *This model is used to work ContactsDetails Table of the database
 */
class ContactsModel extends CI_Model {
	
	
	/**
	 * Returns all the contact records
	 */
	function getAll() {
	
		$this->db->select ( '
				ContactsDetails.*,
				ContactsDetails.ID as CID,
				HotelDetails.ID as HID,
				HotelDetails.HotelName,
				HotelChainDetails.ID as HCID,
				HotelChainDetails.ChainName
				');//A work around to ID replacing problem in CI Active Records
		$this->db->from ( 'ContactsDetails' );
		$this->db->join ( 'HotelDetails', 'ContactsDetails.HotelID=HotelDetails.ID', 'left outer' );//Joined to add details about the hotel's mother chain
		$this->db->join ( 'HotelChainDetails', 'ContactsDetails.ChainID=HotelChainDetails.ID', 'left outer' );
		$query = $this->db->get ();
		return $query->result ();
	}
	
	/**
	 * Add new Contact Record 
	 * @param array $ContactDetails {
	 * 			string 'Position',
	 * 			string 'Name',
	 * 			int	'ChainID',
	 * 			int 'HotelID',
	 * 			string 'Email',
	 * 			string 'OfficeNumber',
	 * 			string 'MobileNumber'
	 * }
	 */
	
	function addContact($ContactDetails) {
		$this->db->insert ( 'ContactsDetails', $ContactDetails );
		return $this->db->insert_id();
	}
	/**
	 * Update Contact details record of the given $id
	 * @param int $id
	 * @param array $ContactDetails {
	 * 			int 'ID',
	 * 			string 'Position',
	 * 			string 'Name',
	 * 			int	'ChainID',
	 * 			int 'HotelID',
	 * 			string 'Email',
	 * 			string 'OfficeNumber',
	 * 			string 'MobileNumber'
	 * }
	 */
	function updateContact($id, $ContactDetails) {
		$this->db->where ( 'ID', $id );
		$this->db->update ( 'ContactsDetails', $ContactDetails );
	}
	
	
	/**
	 * Deletes the contact records of the given $id 
	 * @param int $id
	 */
	function deleteContact($id) {
		$this->db->where ( 'ID', $id );
		$this->db->delete ( 'ContactsDetails' );
	}
	/**
	 * Get all the contacts of the given $hotelID
	 * 
	 * @param int $hotelID
	 */
	function getContactsByHotel($hotelID){
		$this->db->where("HotelID",$hotelID);
		$query = $this->db->get ( 'ContactsDetails' );
		return $query->result ();
		
	}
	
	/**
	 * Get all the contacts of the given $chainID
	 *
	 * @param int $chainID
	 */
	function getContactsByHotelChain($chainID){
		
		$this->db->where("ChainID",$chainID);
		$this->db->from ( 'ContactsDetails' );
		$this->db->join ('HotelDetails', 'HotelDetails.ID = ContactsDetails.HotelID');
		
		$query = $this->db->get ();
		return $query->result ();
	
	}
}

