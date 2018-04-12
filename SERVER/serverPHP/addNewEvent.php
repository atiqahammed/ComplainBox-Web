<?php  
	include '../serverHTML/includesAdminPanel/sessionSrartForAdmin.php';
	require_once('dbConnection.php');
	


	if(isset($_POST['submit'])) {
		
		$event_name = $_POST['text'];
		$event_date = $_POST['dateAndTime'];

		//date_default_timezone_set('Bangladesh/Dhaka');
		//$date = date('m/d/Y h:i:s a', time());

		$event_publishing_date = date('m/d/Y h:i:s a', time()+ 4*3600);
		$event_description =  $_POST['description'];
		$admin_email = $_SESSION['email'];


		$sql="INSERT INTO event (eventName, eventDateTime, eventDescription, eventPublishingDate, email) values ('$event_name','$event_date','$event_description', '$event_publishing_date', '$admin_email')";

		$query=mysqli_query($db, $sql);

		//echo "data inserted";
		header("Location: ../serverHTML/event.php?message=event-uploaded-sucessfully");
		return;

		/*echo  $event_name."<br>";
		echo  $event_date."<br>";
		echo  $event_publishing_date."<br>";
		echo  $event_description."<br>";
		*/

		//echo $_SESSION['email'];




		//echo $_SESSION["email"];

		//$event = new Event();
		//$event->createEvent($db);
	}

?>