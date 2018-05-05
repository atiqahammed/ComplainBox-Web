<?php  
    include 'includesAdminPanel/sessionSrartForAdmin.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <?php  
            include 'includesAdminPanel/headerPart1.php';
        ?>
        <link href="../css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
        <title>Problem - Complain Box</title>
    </head>
    
    <body>
        <nav class="navbar navbar-light" style="background-color: #009688;">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="../../index.php"><img src="../pictures/icon/complain.png" id="indexLogo-complain-box"></a>
                </div>
            
                <ul class="nav navbar-nav">             
                    <li><a href="../../index.php#description-div-custom" class="nev-custom-css" id="ourAppAnc">Our App</a></li>
                    <li><a href="../../index.php#purpose-container" class="nev-custom-css">Purpose</a></li>
                    <li><a href="../../index.php#developers-container" class="nev-custom-css">Supervisor & Developers</a></li>
                </ul>


                <?php
                    include 'includesAdminPanel/adminLogout.php';
                ?>
                
          </div>
        </nav><!-- end of nevigation -->


        <div class="wrapper">
            <nav id="sidebar">
                <a href="../../index.php#complainBoxDev">
                    <div class="sidebar-header">
                        <h3>Complain Box</h3>
                        <strong>CB</strong>
                    </div>
                </a>

                <ul class="list-unstyled components">
                    <li >
                    	<a href="home.php">
                            <i class="glyphicon glyphicon-home"></i>
                            Home
                        </a>
                    </li>


                    <li class="active">
                        <a href="problem.php">
                             <i class="glyphicon glyphicon-exclamation-sign"></i>
                            Problems
                        </a>
                    </li >

                    <!-- active event  -->
                    <li>
                        <a href="event.php">
                            <i class="glyphicon glyphicon-calendar"></i>
                            Events
                        </a>
                    </li>

                    <li>
                        <a href="notice.php">
                            <i class="glyphicon glyphicon-list-alt"></i>
                            Notices
                        </a>
                    </li>
                    <li>
                        <a href="applicationForm.php">
                            <i class="glyphicon glyphicon-file"></i>
                            Application Forms
                        </a>
                    </li>

                    <li>
                        <a href="emergencySupport.php">
                            <i class="glyphicon glyphicon-bell"></i>
                            Emergency Support
                        </a>
                    </li>

                    

                </ul>
            </nav>

            <!-- Page Content Holder -->
            <div id="content" style="width: 100%">
                
                <div class="container-fluid">
                    <div class="row no-gutters">
                        <div class="col-md-5" style="height: 100px;">
                            <button type="button" id="sidebarCollapse" class="btn btn-info navbar-btn" style="background-color: #009688;">
                                <i class="glyphicon glyphicon-align-left"></i>
                            </button></div>
                        <div class="col-md-5">
                            <h1>View Problem</h1>
                        </div>

                        <div class="col-md-2">
                        </div>
                    </div>
                    <hr>
                </div>




                <?php  

                	if(isset($_GET['id']) == true) {
                		$id = $_GET['id'];

                		require_once('../serverPHP/dbConnection.php');				
                		$sql = "SELECT * FROM problem WHERE problemID = '$id'";

                    	$result = mysqli_query($db,$sql);
                    	$row = mysqli_fetch_array($result, MYSQLI_NUM);
                    	mysqli_close($db);

                    	$problem_id = $row[0];
                        $category = $row[1];
                        $problem_file_name = $row[2];
                        $decription = $row[3];
                        $lat = $row[4];
                        $lon = $row[5];
                        $w_no = $row[6];
                        $prio = $row[7];
                        $status = $row[8];
                        $email = $row[9];


                        echo '

		                <div class="container-fluid">
		                    <div class="row">
		                        <div class="col-md-6">
		                            <p style="color: black;"><b>Problem ID: </b>'.$problem_id.'</p>
                                    <p style="color: black;"><b>Problem Category: </b>'.$category.'</p>
                                    <p style="color: black;"><b>Ward No: </b>'.$w_no.'</p>
                                    <p style="color: black;"><b>Priority: </b>'.$prio.'</p>
                                    <p style="color: black;"><b>Statu: </b>'.$status.'</p>

		                        </div>
		                        <div class="col-md-6">
		                            <img style="height: 100%; width: 100%;" src="../problemPicture/'.$problem_file_name.'" alt="problem picture">
		                        </div>

		                        
		                    </div>
		                    <hr>
		                </div>


		                <div class="container-fluid">
		                    <div class="row">
		                        <div class="col-md-6">
		                        	<label for="exampleInputEmail1">Description</label>
		                            <p style="color: black; text-align: justify;">'.$decription.'</p>
		                        </div>
		                        <div class="col-md-6">
		                            <div id="googleMap" style="width:100%;height:250px;"></div>
							   			<script>
											function myMap() {
											var mapProp= {
						    						center:new google.maps.LatLng('.$lat.', '.$lon.'),
						    						zoom:15,
												};
												var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);

												var location = {lat:'.$lat.', lng:'.$lon.'};
												var marker = new google.maps.Marker({
													position: location,
													map, map
												});
											}

											

										</script>
										<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBkKmJPK0oh9K4yGU1USSj7MJpzFWN9LeE&callback=myMap"></script>
		                        </div>  
		                    </div>
		                    <hr>
		                </div>

		                

		                <a href="problem.php">
                    		<button type="button" class="btn btn-secondary" data-dismiss="modal">Back</button>
                		</a>

                		<a href="hideProblem.php?id='.$problem_id.'">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal" style="background-color: #EF5350;">hide</button>
                        </a>



		                ';
		            }
                ?>

                

            </div>
        </div>

         <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
         <!-- Bootstrap Js CDN -->
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

         <script type="text/javascript">
             $(document).ready(function () {
                 $('#sidebarCollapse').on('click', function () {
                     $('#sidebar').toggleClass('active');
                 });
             });
         </script>
    </body>
</html>



