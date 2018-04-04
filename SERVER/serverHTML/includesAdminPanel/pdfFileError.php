<?php  

	if(isset($_GET['error']) == true) {
        if($_GET['error'] == 1) {
            echo '<script>window.alert("Sorry your file is not added. Please upload a pdf");</script>';
        }
        if($_GET['error'] == 2) {
            echo '<script>window.alert("Sorry your file is not added. Please upload a small file");</script>';
        }
    }

?>