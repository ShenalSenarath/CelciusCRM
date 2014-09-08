<?php
function checkloggedin() {
	$CI = & get_instance ();
	$sesdata = $CI->session->all_userdata ();
	$isLogged = $CI->session->userdata ( 'loggedIn' );
	if (! $isLogged) {
		redirect ( '/secure/login/', 'refresh' );
	}
}
function getUsername() {
	$CI = & get_instance ();
	$username = $CI->session->userdata ( 'username' );
	return $username;
}