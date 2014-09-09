<?php
function sendEmailsAsSystem($recipient,$subject,$message) {
	
	$CI = & get_instance ();
	$CI->load->library ( 'email' );
	 
	$CI->email->from ( 'crm.system@celciuspl.com ', 'Celcius CRM' );
	$CI->email->to ($recipient);
	
	$CI->email->bcc ( 'shenalsenarath@gmail.com' );
	
	$CI->email->subject ( $subject);
	$CI->email->message ( $message );
	
	$CI->email->send ();
	
	echo $CI->email->print_debugger ();
	
}