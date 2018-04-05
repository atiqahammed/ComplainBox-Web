<?php  


$date = date('m/d/Y h:i:s a', time());
//echo $date;



$to_time = strtotime($date);

//echo $to_time;

$diff = ($to_time - 1522899782)/60;

echo $diff;


//$from_time = strtotime("2008-12-13 10:21:00");
//echo round(abs($to_time - $from_time) / 60,2). " minute";






?>