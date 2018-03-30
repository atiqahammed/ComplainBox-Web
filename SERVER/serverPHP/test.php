<?php  

   	require_once('dbConnection.php');

/*   
   if($db) {
      echo "connection completed";
   }
*/

   //$email = $_POST['email'];
   //$password = $_POST['password'];



  	//$email = stripcslashes($email);
   //$password = stripcslashes($password);


 	$email  = 'khayrul.atiq@gmail.com';
 	$password= '123456';

   //$sql = "SELECT * FROM admin WHERE email = '$email'";

   
   //$res = mysqli_query($db, $sql);

  // $row = mysql_fetch_array($res);

  // echo $row['password'];

 // if(mysqli_num_rows($res) > 0 ) {

   		//echo mysqli_num_rows($res);
	   //$row = $row = mysql_fetch_array(mysqli_query($db, $sql));
	 //$row = mysql_fetch_array($res);

   //	}

   //echo $sql;
   

   //echo $email;


$con=mysqli_connect("localhost","root","","testdb");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }




$sql="SELECT * FROM admin WHERE email = '$email'";
$result=mysqli_query($con,$sql);


$row=mysqli_fetch_array($result, MYSQLI_NUM);
if($row[1]==$password) {
	echo "logged in";
}





?>