<?php  

	require_once('dbConnection.php');

	$email = $_POST['email'];
   	$password = $_POST['password'];


   	$sql = "SELECT * FROM admin WHERE email = '$email'";
	$result = mysqli_query($db,$sql);

	$sql="SELECT * FROM admin WHERE email = '$email'";
	$result=mysqli_query($db,$sql);


	if(mysqli_num_rows($result) < 1) {
		header("location: ../serverHTML/login.php?error=1");
		return;
	}


	$row=mysqli_fetch_array($result, MYSQLI_NUM);
	
	if($row[1]==$password) {
		header("location: ../serverHTML/home.php");
	}
	else {
		header("location: ../serverHTML/login.php?error=2");
	}

?>