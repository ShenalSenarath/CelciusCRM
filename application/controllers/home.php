<?php
if (! defined ( 'BASEPATH' ))
	exit ( 'No direct script access allowed' );
class Home extends CI_Controller {
	public function __construct() {
		parent::__construct ();
		checkloggedin ();
	}
	public function index() {
		$templateData = array (
				
				'title' => "Home",
				'Username' => getUsername (),
				'viewName' => "home_view" 
		);
		$this->load->view ( '/includes/template', $templateData );
	}
}


