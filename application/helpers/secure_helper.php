<?php
function checkloggedin() {
	
	$CI = & get_instance ();
	$sesdata=$CI->session->all_userdata();
	
	$isLogged = $CI->session->userdata ( 'loggedIn' );
	if (isset ( $isLogged )) 
		redirect('/secure/login/', 'refresh'); 
}