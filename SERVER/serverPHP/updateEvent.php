<?php  
	include '../serverHTML/includesAdminPanel/sessionSrartForAdmin.php';
	require_once('dbConnection.php');
	
	if(isset($_POST['submit'])) {
		$event_date = $_POST['dateAndTime'];
		$event_description =  $_POST['description'];
		$event_id = $_POST['event_id'];
		$sql = "UPDATE event SET eventDateTime='$event_date', eventDescription='$event_description' WHERE eventID=$event_id";
		$query=mysqli_query($db, $sql);
		mysqli_close($db);
		header("Location: ../serverHTML/event.php?message=event-updated-sucessfully");
		return;
	}
?>