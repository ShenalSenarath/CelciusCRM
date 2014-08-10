<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ProductDetailsModel extends CI_Controller {

	function getAll(){
		$query = $this->db->get('ProductDetails');
		return $query->result();	
	}
	
	function addProduct($ProductDetail){
		$this ->db->insert('ProductDetails',$ProductDetail);	
	}

	function updateProduct($id,$ProductDetail){
		$this->db->where('ID',$id);
		$this ->db->update('ProductDetails',$ProductDetail);	
	}

	function deleteProduct($id){
		$this->db->where('ID',$id);
		$this->db->delete('ProductDetails');
	}

}
