<?php

if (! defined ( 'BASEPATH' ))
	exit ( 'No direct script access allowed' );
class Error extends CI_Controller {
	public function index() {
		$templateData = array (
				
				'title' => 'Security Error',
				'Username' =>  getUsername (),
				'viewName' => "permissionerror_view" 
		);
		$this->load->view ( 'includes/template' ,$templateData);
	}
}

