<?php

if (! defined ( 'BASEPATH' ))
	exit ( 'No direct script access allowed' );
class ProductTypesModel extends CI_Model {
	function getAll() {
		$query = $this->db->get ( 'ProductTypes' );
		return $query->result ();
	}
	function addProductType($ProductType) {
		$this->db->insert ( 'ProductTypes', $ProductType );
	}
	function updateProductType($id, $ProductType) {
		$this->db->where ( 'ID', $id );
		$this->db->update ( 'ProductTypes', $ProductType );
	}
	function deleteProductType($id) {
		$this->db->where ( 'ID', $id );
		$this->db->delete ( 'ProductTypes' );
	}
}

