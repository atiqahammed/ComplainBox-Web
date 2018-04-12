<?php  

	require_once('dbConnection.php');
	require_once('../mail/MyEmail.php');

	$email = $_POST['email'];
	$sql = "SELECT * FROM admin WHERE email = '$email'";
	$result = mysqli_query($db,$sql);


	if(mysqli_num_rows($result) < 1) {
		header("location: ../serverHTML/forgotPassword.php?error=1");
		return;
	}

	$row = mysqli_fetch_array($result, MYSQLI_NUM);


	$new_id = uniqid('', true);
	$new_time = date('m/d/Y h:i:s a', time());
	$used = 'no';
	$admin_email_address =  $row[0];



	$sql="INSERT INTO recovery (id, time, used, email) values ('$new_id','$new_time','$used', '$admin_email_address')";
	$query=mysqli_query($db, $sql);



	$mail = new MyEmail();
	$email = array();
	$email['sub'] = 'Reset Password';
	$email['body'] = "You can recover your account from the following link. This link will be valid for 2 hours only. 192.168.1.103/SERVER/serverHTML/resetPassword.php?recoveryid=".$new_id."";
	$email['to'] = $row[0];
	$email['path'] = '../serverHTML/login.php?message=recover-pasword-mail-has-been sent';
	$mail->sendEmail($email);

?>  