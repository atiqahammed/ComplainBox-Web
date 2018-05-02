<?php  




	if(isset($_GET['id']) == true) {
        $id = $_GET['id'];
        require_once('../serverPHP/dbConnection.php');

        $sql = "UPDATE applicationform SET visibility=0 WHERE applicationID = '$id'";
        $result = mysqli_query($db,$sql);
        mysqli_close($db);

        header("Location: applicationform.php?message=event-has-been-hidden");
		return;
	}








?>