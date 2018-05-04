<?php  

	include '../serverHTML/includesAdminPanel/sessionSrartForAdmin.php';
	require_once('dbConnection.php');


	if(isset($_POST['submit'])) {

		$institute_name = $_POST["text"];
		$phone_number = $_POST["phone"];
		$category = $_POST["category"];
		$lat = $_POST["latitude"];
		$lon = $_POST["longitude"];
		$admin_email = $_SESSION['email'];



		$institute_name = base64_encode($institute_name);
		$id = uniqid('', true);


		$sql="INSERT INTO institution (institutionName, latitude, longitude, phone, category, institutionID, email, visibility) values ('$institute_name','$lat','$lon', '$phone_number', '$category', '$id', '$admin_email', 1)";

		//echo $id;

		$query=mysqli_query($db, $sql);
		mysqli_close($db);



		header("Location: ../serverHTML/emergencySupport.php?message=new-institution-added");
		return;
		//echo "string";





	}





























?>