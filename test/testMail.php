<?php  
	
	require_once('../mail/MyEmail.php');
	//require_once('User.php');

	$mail = new MyEmail();


	$email = array();
	$email['sub'] = 'testing';
	$email['body'] = 'hello world';
	$email['to'] = 'atiqahammedshamim@gmail.com';

	$mail->sendEmail($email);









?>