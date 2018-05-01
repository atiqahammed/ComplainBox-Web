<?php  
	include '../serverHTML/includesAdminPanel/sessionSrartForAdmin.php';
	require_once('dbConnection.php');

	if(isset($_POST['submit'])) {
		
		$event_name = $_POST['text'];
		$event_date = $_POST['dateAndTime'];
		$date_in_string = $_POST['dateAndTime'];


		$month_indexing = array("January"=>1, "February"=>2, "March"=>3, "April"=>4, "May"=>5, "June"=>6, "July"=>7, "August"=>8, "September"=>9, "October"=>10, "November"=>11, "December"=>12);

		$temp_time_segment = explode('-', $date_in_string);
		$time = end($temp_time_segment);

		$date  = explode("/", $temp_time_segment[0]);
		$day = $date[0];
		$month = $date[1];
		$year = $date[2];

		$value = (int)$year;
		$value = $value * 400;
		$value = $value + $month_indexing[$month] * 32;
		$value = $value + (int)$day;


		$hour_min_segment = explode(':', $time);
		$hour_string = $hour_min_segment[0];
		$min_segment = $hour_min_segment = explode(' ', $hour_min_segment[1]);

		$value = $value * 47;

		if($min_segment[1] == 'pm' && (int)$hour_string < 12)
			$value = $value + 12;
		else {
			if ($hour_string == ' 12') {
				$value = $value - 12;
			}
		}


		$value = $value + (int)$hour_string;


		$value = $value * 60;
		$value = $value + (int)$min_segment[0];

		$event_publishing_date = date('m/d/Y h:i:s a', time()+ 4*3600);
		$event_description =  $_POST['description'];
		$admin_email = $_SESSION['email'];


		$event_name = base64_encode($event_name);
		$event_description = base64_encode($event_description);

		$sql="INSERT INTO event (eventName, eventDateTime, eventDescription, eventPublishingDate, email, timeValue, visibility) values ('$event_name','$event_date','$event_description', '$event_publishing_date', '$admin_email', '$value', 1)";

		$query=mysqli_query($db, $sql);
		mysqli_close($db);

		header("Location: ../serverHTML/event.php?message=event-uploaded-sucessfully");
		return;
	}

?>