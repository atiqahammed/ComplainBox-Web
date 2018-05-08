<?php  

	include '../serverHTML/includesAdminPanel/sessionSrartForAdmin.php';
	require_once('dbConnection.php');

	$id = $_POST['problem_id'];

	//echo $id;

	$sql = "UPDATE problem SET ";
	$sqlTemp = $sql;
	//echo $sql;

                   

                    

                    if(isset($_POST['category']) && $_POST['category'] != "") {
                        $searchItem = $_POST['category'];
                        if((isset($_POST['status']) && $_POST['status'] != "") 
                        	|| (isset($_POST['priority']) && $_POST['priority'] != "") || 
                        	(isset($_POST['wardNo']) && $_POST['wardNo'] != "")) {


                        	$sql .= "category='$searchItem', ";
                        }
                        else {
                        	$sql .= "category='$searchItem' ";	
                        }

                        
                    }

                    if(isset($_POST['status']) && $_POST['status'] != "") {
                        $searchItem = $_POST['status'];
                        
                        if((isset($_POST['priority']) && $_POST['priority'] != "") || 
                        	(isset($_POST['wardNo']) && $_POST['wardNo'] != "")) {

                        	$sql .= "status='$searchItem', ";	
                        }

                        else {


                        	$sql .= "status='$searchItem' ";
                        }

                        
                    }

                    if(isset($_POST['priority']) && $_POST['priority'] != "") {
                        $searchItem = $_POST['priority'];

                        if(isset($_POST['wardNo']) && $_POST['wardNo'] != "")
                        	$sql .= "priority=$searchItem, ";
                        else 
                        	$sql .= "priority=$searchItem ";
                    }

                    if(isset($_POST['wardNo']) && $_POST['wardNo'] != "") {
                        $searchItem = $_POST['wardNo'];
                        $sql .= "wardNo='$searchItem' ";
                    }


        if($sqlTemp != $sql) {s

        	$sql .= " WHERE problemID='$id'";
        	$query=mysqli_query($db, $sql);
			mysqli_close($db);
			



        }

        header("Location: ../serverHTML/problem.php");
			return;


	














?>