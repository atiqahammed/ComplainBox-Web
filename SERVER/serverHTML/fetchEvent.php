<?php  

	require_once('../serverPHP/dbConnection.php');

	if(isset($_POST["limit"], $_POST["start"])) {

		$query = "SELECT * FROM event ORDER BY eventID DESC LIMIT ".$_POST["start"].", ".$_POST["limit"]."";


		$result = mysqli_query($db, $query);

		while($row = mysqli_fetch_array($result, MYSQLI_NUM)) {

			$temp_time_segment = explode('-', $row[2]);
		    $time = end($temp_time_segment);

		    //echo $time;

		    $date  = explode("/", $temp_time_segment[0]);
		    $day = $date[0];
		    $month = $date[1];
		    $year = $date[2];

			echo '
			
				<div class="container-fluid">
                    <div class="row">
                        <div class="col-md-10">

	                        <h3>'.$row[1].'</h3>
	                        <p style="text-align: justify;">'.$row[3].'<p>
	                        <p>Published on: '.$row[4].'</p>
                            <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#updateModel" style="background-color: #4DB6AC;">Update event date & time</button>





                        <div class="modal fade" id="updateModel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header" style="background-color: #009688;">
                                <h3 class="modal-title" id="exampleModalLabel" style="color: white;">New Notice</h3>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                            
                                <form action="../serverPHP/addNewEvent.php" method="POST" enctype="multipart/form-data">

                                    <div class="form-group">
                                        <h4>'.$row[1].'</h4>
                                    </div>


                                    <div class="form-group">
                                        <label class="control-label">New date Event Date :  </label>
                                        <input type="date" name="newDate">
                                        <input type="hidden" id="dtp_input1" value="" />
                                    </div>
                                    

                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Description</label>
                                        <textarea name="description" maxlength="500" class="form-control" rows="5" id="applicationFormDescription" required></textarea>
                                    </div>
                                    

                                    <button type="submit" name="submit" class="btn btn-primary" style="background-color: #009688;">Add</button>
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </form>
                            </div>
                        <div class="modal-footer">
                        <p>Form for adding new notice.</p>
                      </div>
                    </div>
                  </div>
                </div>














                        </div>
                        <div class="col-md-2">
                            
                            <time datetime="2014-09-20" class="icon">
                                
                                <em>'.$time.'</em>
                                <strong>'.$month.'</strong>
                                <span>'.$day.'</span>


                            </time>

                        </div>

                    </div>
                </div>	
                <hr>
			
			';




		}

	}

?>