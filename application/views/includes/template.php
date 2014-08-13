<?php 
	$headerData=array(
		'title'=>$title,
		'Username'=>$Username,
	);
	
	$viewData=array(
		'data'=>$data
	);
	
	
	$this->load->view ( '/includes/header' );
	$this->load->view ( $viewName, $viewData );
	$this->load->view ( '/includes/footer' );







?>
				