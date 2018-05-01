<?php  

	if(isset($_GET['id']) == true) {
        $id = $_GET['id'];
        require_once('../serverPHP/dbConnection.php');

        $sql = "UPDATE notice SET visibility=0 WHERE noticeID = '$id'";
        $result = mysqli_query($db,$sql);
        mysqli_close($db);

        header("Location: notice.php?message=notice-has-been-hidden");
		return;
	}
?>