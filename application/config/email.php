<?php

$config ['protocol'] = 'smtp';
$config ['charset'] = 'iso-8859-1';
$config ['wordwrap'] = TRUE;
$config ['smtp_host'] = 'tls://smtp.gmail.com';
$config ['smtp_port'] = 465;
$config ['smtp_user'] = 'shenalsenarath@gmail.com';
$config ['smtp_pass'] = 'don5779682';
$config ['priority'] = 5;

$this->email->initialize ( $config );