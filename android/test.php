<?php  


	define('DB_SERVER', 'localhost');
   	define('DB_USERNAME', 'root');
   	define('DB_PASSWORD', '');
   	define('DB_DATABASE', 'testdb');
   	$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

   /*	if ($db) {
   		echo "data base connected";
   	}*/

	if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
		$email = $_POST['email'];
		$password = $_POST['password'];

		//echo $email;
      
      	$sql = "SELECT email FROM admin WHERE email = '$email' and password= '$password';";
      	$result = mysqli_query($db,$sql);

      	//echo $result;
      	$row = mysql_fetch_array($result);
      //$active = $row['active'];
      
      //$count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		echo $row['password'];


      if($row['password'] == $password) {
        // session_register("myusername");
         //$_SESSION['login_user'] = $myusername;
         echo "parchi";
         //header("location: welcome.php");
      }else {
         
      	echo "pari nai";
         //$error = "Your Login Name or Password is invalid";
      }
   }







?>