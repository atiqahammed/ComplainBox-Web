<?php  
	include '../serverHTML/includesAdminPanel/sessionSrartForAdmin.php';
	require_once('dbConnection.php');
	


	if(isset($_POST['submit'])) {
		
		$event_name = $_POST['text'];
		$event_date = $_POST['dateAndTime'];
		$event_publishing_date = date('m/d/Y h:i:s a', time());

		//echo $_SESSION["email"];

		//$event = new Event();
		//$event->createEvent($db);
	}

?>