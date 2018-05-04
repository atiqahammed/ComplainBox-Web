<?php  


	include '../serverHTML/includesAdminPanel/sessionSrartForAdmin.php';
	require_once('dbConnection.php');

	if(isset($_POST['submit'])) {

		$id = $_POST['institute_id'];

		$phone_number = $_POST["phone"];
		//$category = $_POST["category"];
		$lat = $_POST["latitude"];
		$lon = $_POST["longitude"];



		$sql = "UPDATE institution SET latitude='$lat', longitude='$lon', phone='$phone_number' WHERE institutionID='$id'";
		$query=mysqli_query($db, $sql);
		mysqli_close($db);


		header("Location: ../serverHTML/emergencySupport.php?message=update-completed");
		return;
	}














?>