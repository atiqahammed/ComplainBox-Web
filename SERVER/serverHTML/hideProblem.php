<?php  


	if(isset($_GET['id']) == true) {
        $id = $_GET['id'];
        require_once('../serverPHP/dbConnection.php');

        $sql = "UPDATE problem SET visibility=0 WHERE problemID = '$id'";
        $result = mysqli_query($db,$sql);
        mysqli_close($db);

        header("Location: problem.php?message=problem-has-been-hidden");
		return;
	}





?>