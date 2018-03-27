<?php  

	/**
	* 
	*/
	class User
	{
		
		private $conn;

		function __construct()
		{
			require_once('../includes/DBConnect.php');
			$db = new DBConnect();
			$this->conn = $db->connect();

		}

		function createUserAccount($name, $email, $password, $reward) {


			$sql = "INSERT INTO user (name, email, password, reward) VALUES ('$name', '$email', '$password', '$reward')";
			if(mysqli_query($this->conn, $sql)) {
				return true;
				echo 'Data inserted';
			} else {
				return false;
			}
		}




	}


//$op = new DBOperation();
//$op->createUserAccount('Atiq Ahammed', 'bsse0817@iit.du.ac.bd', '123456', '0');






?>