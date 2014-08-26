<?php
if (! defined ( 'BASEPATH' ))
	exit ( 'No direct script access allowed' );
class ProductDetailsModel extends CI_Model {
	function getAll() {
		$query = $this->db->get ( 'ProductDetails' );
		return $query->result ();
	}
	function addProduct($ProductDetail) {
		$this->db->insert ( 'ProductDetails', $ProductDetail );
		return $this->db->insert_id();
	}
	function updateProduct($id, $ProductDetail) {
		$this->db->where ( 'ID', $id );
		$this->db->update ( 'ProductDetails', $ProductDetail );
	}
	function deleteProduct($id) {
		$this->db->where ( 'ID', $id );
		$this->db->delete ( 'ProductDetails' );
	}
	function getByProductType($typeId) {
		$this->db->where ( 'ProductType', $typeId );
		$query = $this->db->get ( 'ProductDetails' );
		return $query->result ();
	}
}

