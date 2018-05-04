<?php  

	require_once('../serverPHP/dbConnection.php');


	if(isset($_POST["limit"], $_POST["start"])) {

		$query = "SELECT * FROM institution WHERE visibility = 1 ORDER BY institutionID DESC LIMIT ".$_POST["start"].", ".$_POST["limit"]."";


		$result = mysqli_query($db, $query);
		mysqli_close($db);

		while($row = mysqli_fetch_array($result, MYSQLI_NUM)) {


		    $name = base64_decode($row[0]);
		    $latitude = $row[1]; 
			$longitude = $row[2];
			$phone = $row[3];
			$category = $row[4];
			$id = $row[5];




			echo '
			
				<div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">

	                        <h3>Institution name: '.$name.'</h3>
	                        
	                        <p>Category : '.$category.'</p>
	                        <p>Phone Number: '.$phone.'</p>

                            <a href="updateInstitute.php?id='.$id.'">
                                <button type="button" class="btn btn-primary btn-sm" style="background-color: #2E7D32;">update</button>
                            </a>

                            <a href="viewInstitute.php?id='.$id.'">
                                <button type="button" class="btn btn-primary btn-sm" style="background-color: #00838F;">view</button>
                            </a>

                            <a href="hideInstitute.php?id='.$id.'">
                                <button type="button" class="btn btn-primary btn-sm" style="background-color: #D32F2F;">hide</button>
                            </a>

                            
                        </div>
                       
                    </div>
                </div>	
                <hr>
			
			';

		}

	}














?>