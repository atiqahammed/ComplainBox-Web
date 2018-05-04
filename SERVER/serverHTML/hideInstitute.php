<?php  

	if(isset($_GET['id']) == true) {
        $id = $_GET['id'];
        require_once('../serverPHP/dbConnection.php');

        $sql = "UPDATE institution SET visibility=0 WHERE institutionID = '$id'";
        $result = mysqli_query($db,$sql);
        mysqli_close($db);

        header("Location: emergencySupport.php?message=institute-has-been-hidden");
		return;
	}
?>