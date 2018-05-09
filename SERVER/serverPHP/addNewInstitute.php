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
		$location_description = $_POST['description'];



		$institute_name = base64_encode($institute_name);


		$location_description = base64_encode($location_description);

		echo $location_description.'<br>';
		$id = uniqid('', true);


		$sql="INSERT INTO institution (institutionName, latitude, longitude, phone, category, institutionID, email, visibility, instituteLocation) values ('$institute_name','$lat','$lon', '$phone_number', '$category', '$id', '$admin_email', 1, '$location_description')";

		//echo $id;

		$query=mysqli_query($db, $sql);
		if($query)
			echo "string";
		else
			echo "22222";

		mysqli_close($db);



		header("Location: ../serverHTML/emergencySupport.php?message=new-institution-added");
		return;
		//echo "string";





	}





























?>