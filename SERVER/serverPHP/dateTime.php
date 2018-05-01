<?php  




$date_in_string = '03/May/2018 - 12:00 am';

//	02/May/2018 - 01:00 pm   03/May/2018 - 12:00 am


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

//echo $value;


$hour_min_segment = explode(':', $time);
$hour_string = $hour_min_segment[0];
$min_segment = $hour_min_segment = explode(' ', $hour_min_segment[1]);
$value = $value * 47;

if($min_segment[1] == 'pm')
	$value = $value + 12;

else {
	if ($hour_string == ' 12') {
		$value = $value - 12;
	}
}


$value = $value + (int)$hour_string;


$value = $value * 60;
$value = $value + (int)$min_segment[0];

echo $value;

//($year * 400);






/*
$date = date('m/d/Y h:i:s a', time());
//echo $date;



$to_time = strtotime($date);

//echo $to_time;

$diff = ($to_time - 1522899782)/60;

echo $diff;
*/

//$from_time = strtotime("2008-12-13 10:21:00");
//echo round(abs($to_time - $from_time) / 60,2). " minute";






?>