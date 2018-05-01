<?php  
	include '../serverHTML/includesAdminPanel/sessionSrartForAdmin.php';
	require_once('dbConnection.php');
	
	if(isset($_POST['submit'])) {
		$event_date = $_POST['dateAndTime'];
		$event_description =  $_POST['description'];
		$event_id = $_POST['event_id'];
		
		$date_in_string = $event_date;
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


		$event_description = base64_encode($event_description);

		$sql = "UPDATE event SET eventDateTime='$event_date', eventDescription='$event_description', timeValue='$value' WHERE eventID=$event_id";
		$query=mysqli_query($db, $sql);
		mysqli_close($db);
		header("Location: ../serverHTML/event.php?message=event-updated-sucessfully");
		return;
	}
?>