<?php
if (! defined ( 'BASEPATH' ))
	exit ( 'No direct script access allowed' );
/**
 *
 * @author Shenal Senarath
 *        
 *         This Model is used to deal with the HotelChainDetails table of the database.
 *         Hotel chain related database operations are done by this.
 */
class HotelChainDetailsModel extends CI_Model {
	/**
	 * @return array of all the hotelChain records
	 */
	function getAll() {
		$query = $this->db->get ( 'HotelChainDetails' );
		return $query->result ();
	}
	
	/**
	 * @param int $id- hotel chain id
	 * 
	 * @return array with specific record of the given hotel chain
	 */
	function getHotelChain($id) {
		$this->db->where ( 'ID', $id );
		$query = $this->db->get ( 'HotelChainDetails' );
		return $query->result ();
	}
	
	/**
	 * Adds new hotel chain record to the database
	 * @param array $HotelChainDetail{
	 * 			string 'ChainName',
	 * 			string 'HeadOfficeAddress'
	 * }
	 */
	function addHotelChain($HotelChainDetail) {
		$Status=$this->db->insert ( 'HotelChainDetails', $HotelChainDetail );
		return $this->db->insert_id();
	}
	
	/**
	 * updates hotel chain record in the database with the given $id 
	 * @param int $id
	 * @param array $HotelChainDetail{
	 * 			string 'ChainName',
	 * 			string 'HeadOfficeAddress'
	 * }
	 */
	function updateHotelChain($id, $HotelChainDetail) {
		$this->db->where ( 'ID', $id );
		$this->db->update ( 'HotelChainDetails', $HotelChainDetail );
	}
	/**
	 * Deletes the hotel chain record with the given $id
	 * 
	 * @param int $id
	 */
	function deleteHotelChain($id) {
		$this->db->where ( 'ID', $id );
		$this->db->delete ( 'HotelChainDetails' );
	}
}

