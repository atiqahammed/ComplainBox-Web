<?php  

	
		class DBConnect
		{
			private $conn;

			function __construct()
			{
				# code...
			}



			function connect() {
				include_once('constants.php');
				$this->conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

				if(mysqli_connect_errno()) {
					echo "fail to connect database".mysqli_connect_err();
				}

				return $this->conn;
			}
		}	






?>