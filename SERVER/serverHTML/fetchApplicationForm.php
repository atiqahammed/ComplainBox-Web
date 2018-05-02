<?php  

	require_once('../serverPHP/dbConnection.php');

	if(isset($_POST["limit"], $_POST["start"])) {

		$query = "SELECT * FROM applicationform WHERE visibility = 1 ORDER BY applicationID DESC LIMIT ".$_POST["start"].", ".$_POST["limit"]."";

		$result = mysqli_query($db, $query);
		mysqli_close($db);

		while($row = mysqli_fetch_array($result, MYSQLI_NUM)) {
			
			$row[1] = base64_decode($row[1]);
			$row[2] = base64_decode($row[2]);

			echo '
			
				<div>
  					<h3>'.$row[1].'</h3>
					<p style="text-align: justify;">'.$row[2].'</p>
  					
  					<a href="../applicationForms/'.$row[3].'">
  						<button type="button" class="btn btn-primary btn-sm" style="background-color: #1565C0;">view</button>
  					</a>
  					<a href="../applicationForms/'.$row[3].'" download>
						<button type="button" class="btn btn-primary btn-sm" style="background-color: #9E9D24;">download</button>
					</a>

					<a href="updateApplicationForm.php?id='.$row[0].'">
                        <button type="button" class="btn btn-primary btn-sm" style="background-color: #2E7D32;">update</button>
                    </a>

                    <a href="hideApplicationForm.php?id='.$row[0].'">
                      	<button type="button" class="btn btn-primary btn-sm" style="background-color: #D32F2F;">hide</button>
                    </a>
				</div>	
			
			';
		}

	}


















?>