<?php  

	require_once('../serverPHP/dbConnection.php');

	//echo "string";

	if(isset($_POST["limit"], $_POST["start"])) {

		$query = "SELECT * FROM applicationform ORDER BY applicationID DESC LIMIT ".$_POST["start"].", ".$_POST["limit"]."";
		//echo $query;


		$result = mysqli_query($db, $query);

		while($row = mysqli_fetch_array($result, MYSQLI_NUM)) {
			echo '
			
				<div>
  					<h3>'.$row[1].'</h3>
					<p style="text-align: justify;">'.$row[2].'</p>
  					
  					<a href="../applicationForms/'.$row[3].'">
  						<button type="button" class="btn btn-primary btn-sm" style="background-color: #4DB6AC;">View Application Form</button>
  					</a>
  					<a href="../applicationForms/'.$row[3].'" download>
						<button type="button" class="btn btn-primary btn-sm" style="background-color: #4DB6AC;">Download Application Form</button>
					</a>
				</div	
			
			';
		}

	}


















?>