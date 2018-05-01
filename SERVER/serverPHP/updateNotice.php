<?php  
	
	include '../serverHTML/includesAdminPanel/sessionSrartForAdmin.php';
	require_once('dbConnection.php');

	if(isset($_POST['submit'])) {

		$notice_id = $_POST['notice_id'];

		$file = $_FILES['file'];
		$file_name = $_FILES['file']['name'];
		$file_tmp_name = $_FILES['file']['tmp_name'];
		$file_size = $_FILES['file']['size'];
		$file_error = $_FILES['file']['error'];
		$file_type = $_FILES['file']['type'];
		

		$file_ext = explode('.', $file_name);
		$file_actual_ext = strtolower(end($file_ext));
		
		if($file_actual_ext != "pdf") {
			header("Location: ../serverHTML/notice.php?error=1");
			return; 
		}

		if($file_error === 0) {
			if ($file_size < 10000000000) {
				$file_name_new = uniqid('', true).'.'.$file_actual_ext;
				$file_destination = '../noticeFiles/'.$file_name_new;
				move_uploaded_file($file_tmp_name, $file_destination);
				
				$sql = "UPDATE notice SET noticeFileName='$file_name_new' WHERE noticeID=$notice_id";
				$query=mysqli_query($db, $sql);
				mysqli_close($db);
				header("Location: ../serverHTML/notice.php?message=file-upload-sucessfully");
				return;
				
			} else {
				mysqli_close($db);
				header("Location: ../serverHTML/notice.php?error=2");
				return;
			}
		}




	}




?>