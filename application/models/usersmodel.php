<?php
if (! defined ( 'BASEPATH' ))
	exit ( 'No direct script access allowed' );

/**
 *
 * @author Shenal Senarath
 *        
 *         This model is used to work UserDetails Table of the database
 */
class UsersModel extends CI_Model {
	
	/**
	 * Returns all the user records
	 */
	function getAll() {
		$this->db->from ( 'UserDetails' );
		$this->db->select('ID,Username,Email,UserGroup,IsReset');
		$query = $this->db->get ();
		return $query->result ();
	}
	
	/**
	 * Add new user Record
	 * 
	 * @param array $UserDetails        	
	 *
	 */
	function addUser($UserDetails) {
		$this->db->insert ( 'UserDetails', $UserDetails );
		return $this->db->insert_id ();
	}
	/**
	 * Update user details record of the given $id
	 * 
	 * @param int $id        	
	 * @param array $userDetails
	 *        	{
	 *        	int 'ID',
	 *        	string 'Position',
	 *        	string 'Name',
	 *        	int	'ChainID',
	 *        	int 'HotelID',
	 *        	string 'Email',
	 *        	string 'OfficeNumber',
	 *        	string 'MobileNumber'
	 *        	}
	 */
	function updateUser($id, $UserDetails) {
		$this->db->where ( 'ID', $id );
		$this->db->update ( 'UserDetails', $UserDetails );
	}
	
	/**
	 * Deletes the user records of the given $id
	 * 
	 * @param int $id        	
	 */
	function deleteUser($id) {
		$this->db->where ( 'ID', $id );
		$this->db->delete ( 'UserDetails' );
	}
	
	function getPasswordHashByUsername($Username){
		$this->db->where('Username',$Username);
		$this->db->select('PasswordHash,IsReset,userGroup');
		$query = $this->db->get ( 'UserDetails' );
		return $query->result ();
		
	}
	function getPasswordHashByEmail($Email){
		$this->db->where('Email',$Email);
		$this->db->select('PasswordHash,IsReset,userGroup');
		$query = $this->db->get ( 'UserDetails' );
		return $query->result ();
	}
}