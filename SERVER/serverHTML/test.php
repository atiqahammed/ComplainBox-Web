<?php  
    
    require_once('../serverPHP/dbConnection.php');

    //$query = "SELECT * FROM notice ORDER BY noticeID DESC LIMIT ".$_POST["start"].", ".$_POST["limit"]."";
    $id = "Test Notice 1";


    //echo $id;

    //$query = "SELECT * FROM notice WHERE noticeID = 'id'";
    $sql = "SELECT * FROM notice WHERE noticeTitle = '$id'";
    $result = mysqli_query($db, $sql);

    /*if($result) {
        echo "string";
    }*/

    $row=mysqli_fetch_array($result, MYSQLI_NUM);

    //echo $row[0];

    //echo $row[4];
    //echo $row[0];
    //echo $row[0];

    $temp_time_segment = explode('-', $row[4]);
    
    $time = end($temp_time_segment);

    //echo $time;

    $date  = explode(" ", $temp_time_segment[0]);
    $day = $date[0];
    $month = $date[1];
    $year = $date[2];


    echo $day;

    //echo $date;

    //$file_actual_ext = strtolower(end($file_ext));


/*
    echo '

        <label for="meeting">Meeting Date : </label><input id="meeting" type="date" value="2011-01-13"/>


    ';
    
*/  














/*
    if($db) {
        echo "string";
    }
*/
























?>