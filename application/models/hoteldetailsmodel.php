<?php
if (! defined ( 'BASEPATH' ))
	exit ( 'No direct script access allowed' );
/**
 * @author Shenal Senarath
 *
 *	This Model is used to deal with the HotelDetails table of the database.
 *  Hotel related database operations are done by this.
 */
class HotelDetailsModel extends CI_Model {
	/**
	 * @return array of all the hotel details of all hotels 
	 */
	function getAll() {
		$this->db->select ( 'HotelDetails.*,HotelDetails.ID as HID,HotelChainDetails.*' );//A work around to ID replacing problem in CI Active Records 
		$this->db->from ( 'HotelDetails' );
		$this->db->join ( 'HotelChainDetails', 'HotelDetails.HotelChainID=HotelChainDetails.ID', 'left outer' );//Joined to add details about the hotel's mother chain
		
		$query = $this->db->get ();
		return $query->result ();
	}
	/**
	 * Adds new hotel record
	 * 
	 * @param array $HotelDetail{
	 * 			string 'HotelName',
	 * 			string 'Address',
	 * 			int 'ChainID'
	 * }
	 */
	function addHotel($HotelDetail) {
		$this->db->insert ( 'HotelDetails', $HotelDetail );
		return $this->db->insert_id();
	}
	/**
	 * Updates hotel record with the given $id
	 * 
	 * @param integer $id
	 * @param array $HotelDetail{
	 * 			string 'HotelName',
	 * 			string 'Address',
	 * 			int 'ChainID'
	 * }
	 */
	function updateHotel($id, $HotelDetails) {
		$this->db->where ( 'ID', $id );
		$this->db->update ( 'HotelDetails', $HotelDetails );
	}
	/**
	 * Delets the hotel record of the given $id
	 * @param integer $id
	 */
	function deleteHotel($id) {
		$this->db->where ( 'ID', $id );
		$this->db->delete ( 'HotelDetails' );
	}
	/**
	 * 
	 * @param int $id
	 * 
	 * @return array with the hotel record of the given $id
	 */
	function getHotel($id) {
		$this->db->where ( 'ID', $id );
		$query = $this->db->get ( 'HotelDetails' );
		return $query->result ();
	}
	
	/**
	 * @param int $chainId
	 * 
	 * @return array with all the hotels in a hotel chain
	 */
	function getHotelByHotelChain($chainId) {
		$this->db->where ( 'HotelChainID', $chainId );
		$query = $this->db->get ( 'HotelDetails' );
		return $query->result ();
	}
}

