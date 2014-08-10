<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Auth extends CI_Controller {

	
	public function index()
	{
		
		$this->load->view('login_view');

	}
	
	public function validateCredentials(){
		$this->load->view('includes/template');
	}
}

