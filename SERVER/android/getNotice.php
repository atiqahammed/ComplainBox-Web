<?php  

	
	

		define('DB_SERVER', 'localhost');
        define('DB_USERNAME', 'root');
        define('DB_PASSWORD', '');
        define('DB_DATABASE', 'testdb');
        $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);


        $sql = "SELECT * FROM notice WHERE visibility = 1";
        $result=mysqli_query($db, $sql);

        //echo "string";

        $number_of_rows = mysqli_num_rows($result);
        //$temp_array = array();
         $response["notices"] = array();
        if($number_of_rows > 0) {
        	
        	while ($row = mysqli_fetch_assoc($result)) {
        		$temp_array = array();
        		$row['noticeTitle'] = base64_decode($row['noticeTitle']);
        		$temp_array['noticeTitle'] = $row['noticeTitle'];
        		$temp_array['date'] = $row['date'];
        		$temp_array['noticeFileName'] = $row['noticeFileName'];
        		array_push($response["notices"], $temp_array);
        		
        	}


        }



        header('Content-type: application/json');

       
        
        $response["success"] = 1;

        //echo json_encode(array('notices'=>$temp_array));
        echo json_encode($response);
        mysqli_close($db);




	













?>