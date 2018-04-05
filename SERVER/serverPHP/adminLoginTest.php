<?php  

	require_once('dbConnection.php');
	session_start();


	$email = $_POST['email'];
   	$password = $_POST['password'];


   	$sql = "SELECT * FROM admin WHERE email = '$email'";
	$result = mysqli_query($db,$sql);


	if(mysqli_num_rows($result) < 1) {
		header("location: ../serverHTML/login.php?error=1");
		return;
	}


	$row=mysqli_fetch_array($result, MYSQLI_NUM);
	
	if($row[1]==md5($password)) {
		$_SESSION["email"] = $row[0];

		header("location: ../serverHTML/home.php");
		//header("location: test.php");
	}
	else {
		header("location: ../serverHTML/login.php?error=2");
	}

?>