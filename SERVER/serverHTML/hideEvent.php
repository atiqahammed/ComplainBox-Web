<?php  

	if(isset($_GET['id']) == true) {
        $id = $_GET['id'];
        require_once('../serverPHP/dbConnection.php');

        $sql = "UPDATE event SET visibility=0 WHERE eventID = '$id'";
        $result = mysqli_query($db,$sql);
        mysqli_close($db);

        header("Location: event.php?message=event-has-been-hidden");
		return;
	}
?>