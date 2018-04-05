<?php  



class Event 
{
	
	function __construct()
	{
		include '../serverHTML/includesAdminPanel/sessionSrartForAdmin.php';
		//require_once('dbConnection.php');
	}


	function print($db) {
		//require_once('dbConnection.php');
		

		//echo "this is in print function";
		if($db) 
			echo "database connected";
	}


	function createEvent($db) {
		//require_once('dbConnection.php');
		

		//echo "this is in print function";
		if($db) 
			echo "database connected";
	}



}














?>