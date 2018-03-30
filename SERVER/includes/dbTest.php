<?php  
	
	require_once('DBConnect.php');
	$db = new DBConnect();
	if($db) {
		echo "done";
	}
	else {
		echo "failed";
	}


?>