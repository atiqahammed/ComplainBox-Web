<?php  


	require_once('User.php');
	$response = array();

	if($_SERVER['REQUEST_METHOD'] == 'POST') {
		storeUserInformation($response);
		sendConfirmationMail();
	} else {
		invalidRequestMethod($response);
	}

	echo json_encode($response);



	function sendConfirmationMail() {
		require_once('../mail/MyEmail.php');
		$mail = new MyEmail();
		$email = array();
		$email['sub'] = 'Registration Completed';
		$email['body'] = 'Hello '.$_POST['name'].',<br> Welcome to complain box';
		$email['to'] = $_POST['email'];
		$mail->sendEmail($email);
	}

	function invalidRequestMethod($response) {
		$response['error'] = true;
		$response['message'] = 'invalid request method';
	}

	function storeUserInformation($response) {
		$user = new User();
		$user->createUserAccount(
			$_POST['name'],
			$_POST['email'],
			$_POST['password'],
			'0'
		);
		$response['error'] = false;
		$response['message'] = 'user account successfully created';
	}


?>