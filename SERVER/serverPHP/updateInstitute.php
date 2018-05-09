<?php  


	include '../serverHTML/includesAdminPanel/sessionSrartForAdmin.php';
	require_once('dbConnection.php');

	if(isset($_POST['submit'])) {

		$id = $_POST['institute_id'];

		$phone_number = $_POST["phone"];
		//$category = $_POST["category"];
		$lat = $_POST["latitude"];
		$lon = $_POST["longitude"];

		$location_description = $_POST['description']; 

		$location_description = base64_encode($location_description);

		$sql = "UPDATE institution SET latitude='$lat', longitude='$lon', phone='$phone_number', instituteLocation='$location_description' WHERE institutionID='$id'";
		$query=mysqli_query($db, $sql);
		mysqli_close($db);


		header("Location: ../serverHTML/emergencySupport.php?message=update-completed");
		return;
	}














?>