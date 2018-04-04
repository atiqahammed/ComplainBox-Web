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
			header("Location: ../serverHTML/applicationForm.php?error=1");
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


				$sql="INSERT INTO applicationform (applicationTitle, applicationDescription, applicationFileName) values ('$title','$description','$fileNameNew')";

				$query=mysqli_query($db, $sql);


				header("Location: ../serverHTML/applicationForm.php?message=file-upload-sucessfully");
				return;
				
			} else {
				header("Location: ../serverHTML/applicationForm.php?error=2");
				return;
			}
		}


		

	}

	


	


?>