<?php

if (! defined ( 'BASEPATH' ))
	exit ( 'No direct script access allowed' );
class Home extends CI_Controller {
	public function index() {
		$templateData = array (
		
				
				'title' => "Home",
				'Username' => "HardCodedUser",
				'viewName' => "home_view"
		);
		$this->load->view ( '/includes/template', $templateData );
	
	}
	
}


