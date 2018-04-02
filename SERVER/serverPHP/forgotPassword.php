<?php  

	require_once('dbConnection.php');
	require_once('../mail/MyEmail.php');

	$email = $_POST['email'];
	//echo $email;
	$sql = "SELECT * FROM admin WHERE email = '$email'";
	$result = mysqli_query($db,$sql);




		//echo mysqli_num_rows($result);
	if(mysqli_num_rows($result) < 1) {
		header("location: ../serverHTML/forgotPassword.php?error=1");
		return;
	}

	$row = mysqli_fetch_array($result, MYSQLI_NUM);
    $password = $row[1];


   // echo $password;
    
	$mail = new MyEmail();
	$email = array();
	$email['sub'] = 'Response to Forgot Password';
	$email['body'] = "You have forgot your password and requested me to provide you it. As, you are our valid loyal admin, I am provding you it. your password is: ".$password.". Be careful and don't forget next time. :)";
	$email['to'] = $row[0];
	$email['path'] = '../serverHTML/login.php?message=1';
	



	$mail->sendEmail($email);



?>  