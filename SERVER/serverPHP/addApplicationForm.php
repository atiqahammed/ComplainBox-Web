<?php  

	require_once('dbConnection.php');

	$file = $_FILES['file'];
	$fileName = $_FILES['file']['name'];
	$fileTmpName = $_FILES['file']['tmp_name'];
	$fileSize = $_FILES['file']['size'];
	$fileError = $_FILES['file']['error'];
	$fileType = $_FILES['file']['type'];
	

	$fileExt = explode('.', $fileName);
	//echo $fileExt[0];

	if(isset($_POST['submit'])) {
		//echo "ok";

		$file = $_FILES['file'];
	//print_r($file);


		$fileName = $_FILES['file']['name'];
		$fileTmpName = $_FILES['file']['tmp_name'];
		$fileSize = $_FILES['file']['size'];
		$fileError = $_FILES['file']['error'];
		$fileType = $_FILES['file']['type'];
		

		$fileExt = explode('.', $fileName);
		$fileActualExt = strtolower(end($fileExt));
		//echo $fileActualExt;
		if($fileActualExt != "pdf") {
			mysqli_close($db);
			header("Location: ../serverHTML/addNewApplicationForm.php?error=1");
			return;

		}

		if($fileError === 0) {

			//echo "string";
			if ($fileSize < 10000000000) {
				$fileNameNew = uniqid('', true).'.'.$fileActualExt;

				//echo $fileNameNew;
				$fileDestination = '../applicationForms/'.$fileNameNew;
				move_uploaded_file($fileTmpName, $fileDestination);


				$title = $_POST["text"];
				$description = $_POST["description"];

				$title = base64_encode($title);
				$description = base64_encode($description);
				$type = $_POST["category"];
				$date_and_time = date('m/d/Y h:i:s a', time()+ 4*3600);

				$sql="INSERT INTO applicationform (applicationTitle, applicationDescription, applicationFileName, visibility, applicationFormType, date) values ('$title','$description','$fileNameNew', 1, '$type', '$date_and_time')";

				$query=mysqli_query($db, $sql);

				mysqli_close($db);
				header("Location: ../serverHTML/applicationForm.php?message=file-upload-sucessfully");
				return;
				
			} else {
				mysqli_close($db);
				header("Location: ../serverHTML/addNewApplicationForm.php?error=1");
				return;
			}
		}


		

	}

	


	


?>