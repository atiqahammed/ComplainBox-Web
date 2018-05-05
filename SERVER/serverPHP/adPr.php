<?php  
	
	include '../serverHTML/includesAdminPanel/sessionSrartForAdmin.php';
	require_once('dbConnection.php');


	if(isset($_POST['submit'])) {
		$file = $_FILES['file'];
		$file_name = $_FILES['file']['name'];
		$file_tmp_name = $_FILES['file']['tmp_name'];
		$file_size = $_FILES['file']['size'];
		$file_error = $_FILES['file']['error'];
		$file_type = $_FILES['file']['type'];
		

		$file_ext = explode('.', $file_name);
		$file_actual_ext = strtolower(end($file_ext));
		
		
		//echo "string";


		
		if($file_error === 0) {
			if ($file_size < 10000000000) {
				$id = uniqid('', true);
				$file_name_new = $id.'.'.$file_actual_ext;
				$file_destination = '../problemPicture/'.$file_name_new;
				move_uploaded_file($file_tmp_name, $file_destination);
				$cat = $_POST["cat"];

				$des = $_POST["des"];
				$lat = $_POST["lat"];
				$lon = $_POST["lon"];
				$email = $_POST["email"];
				
				
				echo $file_name;

				//$date_and_time = date('m/d/Y h:i:s a', time()+ 4*3600);

				//$admin_email = $_SESSION["email"];
				$sql="INSERT INTO problem (problemID, category, problemFileName, description, latitude, longitude, priority, status, email, visibility) values ('$id','$cat','$file_name_new', '$des', '$lat', '$lon', 0, 'in consideration', '$email', 1)";
				$query=mysqli_query($db, $sql);
				mysqli_close($db);

				echo "data has been inserted";
			//	header("Location: ../serverHTML/notice.php?message=file-upload-sucessfully");
			//	return;
				
			} else {
				//mysqli_close($db);
				//header("Location: ../serverHTML/addNewNotice.php?error=2");
				//return;
			}
		}
	}

?>