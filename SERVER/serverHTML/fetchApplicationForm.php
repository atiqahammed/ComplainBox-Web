<?php  

	require_once('../serverPHP/dbConnection.php');

	if(isset($_POST["limit"], $_POST["start"])) {

		$query = "SELECT * FROM applicationform WHERE visibility = 1 ORDER BY applicationID DESC LIMIT ".$_POST["start"].", ".$_POST["limit"]."";

		$result = mysqli_query($db, $query);
		mysqli_close($db);

		while($row = mysqli_fetch_array($result, MYSQLI_NUM)) {
			
			$row[1] = base64_decode($row[1]);
			$row[3] = base64_decode($row[3]);

			echo '
			
				<div>
  					<h3 style="color: black;">'.$row[1].'</h3>
					<p style="text-align: justify; color: black;"><b>Application form type: </b>'.$row[2].'</p>
					<p style="text-align: justify; color: black;">'.$row[3].'</p>
					<p style="text-align: justify; color: black;"><b>Publishing date: </b>'.$row[5].'</p>
  					
  					<a href="../applicationForms/'.$row[4].'">
  						<button type="button" class="btn btn-primary btn-sm" style="background-color: #1565C0; border-color: #1565C0;">view</button>
  					</a>
  					<a href="../applicationForms/'.$row[4].'" download>
						<button type="button" class="btn btn-primary btn-sm" style="background-color: #9E9D24; border-color: #9E9D24;">download</button>
					</a>

					<a href="updateApplicationForm.php?id='.$row[0].'">
                        <button type="button" class="btn btn-primary btn-sm" style="background-color: #2E7D32; border-color: #2E7D32;">update</button>
                    </a>

                    <a href="hideApplicationForm.php?id='.$row[0].'">
                      	<button type="button" class="btn btn-primary btn-sm" style="background-color: #D32F2F; border-color: #D32F2F;">hide</button>
                    </a>
				</div>	
			
			';
		}

	}


















?>