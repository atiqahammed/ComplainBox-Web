<?php 

	require_once('../serverPHP/dbConnection.php');

	$email = 'khayrul.atiq@gmail.com';
	$password = '123456';


	$en_password = md5($password);

	//echo $en_password;

	$sql="INSERT INTO admin (email, password) values ('$email','$en_password')";
	$query=mysqli_query($db, $sql);
	if($query) {
		echo "data Has been inserted";
	}




















 ?>