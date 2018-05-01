<?php  

	require_once('../serverPHP/dbConnection.php');

	if(isset($_POST["limit"], $_POST["start"])) {

		$query = "SELECT * FROM notice WHERE visibility = 1 ORDER BY noticeID DESC LIMIT ".$_POST["start"].", ".$_POST["limit"]."";


		$result = mysqli_query($db, $query);

		while($row = mysqli_fetch_array($result, MYSQLI_NUM)) {
			echo '
			
				<div>
  					<h3>'.$row[1].'</h3>
  					<p>Publishing date: '.$row[4].'</p>
  					
  					<a href="../noticeFiles/'.$row[2].'">
  						<button type="button" class="btn btn-primary btn-sm" style="background-color: #1565C0;">view</button>
  					</a>
  					<a href="../noticeFiles/'.$row[2].'" download>
						<button type="button" class="btn btn-primary btn-sm" style="background-color: #9E9D24;">download</button>
					</a>

					<a href="updateNotice.php?id='.$row[0].'">
                        <button type="button" class="btn btn-primary btn-sm" style="background-color: #2E7D32;">update</button>
                    </a>

                    <a href="hideNotice.php?id='.$row[0].'">
                      	<button type="button" class="btn btn-primary btn-sm" style="background-color: #D32F2F;">hide</button>
                    </a>




				</div>	
			
			';
		}

	}

?>