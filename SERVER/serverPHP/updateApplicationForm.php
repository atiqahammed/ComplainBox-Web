<?php  

	include '../serverHTML/includesAdminPanel/sessionSrartForAdmin.php';
	require_once('dbConnection.php');

	if(isset($_POST['submit'])) {

		$ap_description =  $_POST['description'];
		$ap_id = $_POST['id'];

		$ap_description = base64_encode($ap_description);



		$file = $_FILES['file'];
		$file_name = $_FILES['file']['name'];
		$file_tmp_name = $_FILES['file']['tmp_name'];
		$file_size = $_FILES['file']['size'];
		$file_error = $_FILES['file']['error'];
		$file_type = $_FILES['file']['type'];
		

		$file_ext = explode('.', $file_name);
		$file_actual_ext = strtolower(end($file_ext));
		
		if($file_actual_ext != "pdf") {
			mysqli_close($db);
			header("Location: ../serverHTML/applicationForm.php?error=1");
			return; 
		}

		if($file_error === 0) {
			if ($file_size < 10000000000) {
				$file_name_new = uniqid('', true).'.'.$file_actual_ext;
				$file_destination = '../noticeFiles/'.$file_name_new;
				move_uploaded_file($file_tmp_name, $file_destination);
				
				$sql = "UPDATE applicationform SET applicationFileName='$file_name_new', applicationDescription='$ap_description' WHERE applicationID=$ap_id";
				$query=mysqli_query($db, $sql);
				mysqli_close($db);
				header("Location: ../serverHTML/applicationForm.php?message=file-upload-sucessfully");
				return;
				
			} else {
				mysqli_close($db);
				header("Location: ../serverHTML/applicationForm.php?error=2");
				return;
			}
		}

	}

?>