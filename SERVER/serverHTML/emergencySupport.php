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
        <title>Emergency Support - Complain Box</title>


        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>  

        <script type="text/javascript">
            
            function searchq() {
                var searchTxt = $("input[name='search']").val();
                //alert(searchTxt);
                $.post("instituteFetch.php", {searchVal: searchTxt}, function(output){
                    $("#output").html(output);
                });
            }
        </script>


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


                    <li>
                        <a href="problem.php">
                             <i class="glyphicon glyphicon-exclamation-sign"></i>
                            Problems
                        </a>
                    </li >

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

                    <li class="active">
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
                            </button>
                        </div>
                        <div class="col-md-5">
                            <h1>E.S. Institute</h1>
                        </div>

                        <div class="col-md-2">
                        </div>
                    </div>
                    <hr>
                </div>


                <a href="addNewInstitute.php">
                    <button type="button" class="btn btn-primary btn-sm" style="background-color: #009688;">New Institute</button>
                </a>
               
                <hr>

                <div id="load_data"></div>
                <div id="load_data_message"></div>
                <br>




                <form action="emergencySupport.php" method="POST">
                    <div class="form-group">
                        <input type="text" name="search" onkeydown="searchq();" class="form-control"  placeholder="Type category to search institute..." >
                        <br>
                        <button type="submit" name="submit" class="btn btn-primary" style="background-color: #009688;">search</button>
                    </div>
                    
                </form>

                <div id="output">
<?php  
    define('DB_SERVER', 'localhost');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', '');
    define('DB_DATABASE', 'testdb');
    $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
    $output = '';

    if(isset($_POST['search'])) {
        $searchq = $_POST['search'];
        $searchq = preg_replace("#[^0-9a-z]#i", "", $searchq);
        $sql = "SELECT * FROM institution WHERE (institutionName LIKE '%$searchq%' OR instituteLocation LIKE '%$searchq%' OR category LIKE '%$searchq%') AND visibility = 1 ORDER BY institutionID DESC";

        $result=mysqli_query($db, $sql);

        while($row = mysqli_fetch_array($result, MYSQLI_NUM)) {

            $name = base64_decode($row[0]);
            $latitude = $row[1]; 
            $longitude = $row[2];
            $phone = $row[3];
            $category = $row[4];
            $id = $row[5];
            $location = base64_decode($row[8]);

            $output .= '
            
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12" style = "box-shadow: 0 8px 6px -6px black; background-color: #e6ecf7">

                            <h3 style="color: black;"><b>Institution name:</b> '.$name.'</h3>
                            
                            <p style="color: black;"><b>Category :</b> '.$category.'</p>
                            <p style="color: black;"><b>Address:</b> '.$location.'</p>
                            <p style="color: black;"><b>Phone Number:</b> '.$phone.'</p>

                            <a href="updateInstitute.php?id='.$id.'">
                                <button type="button" class="btn btn-primary btn-sm" style="background-color: #2E7D32; border-color: #2E7D32;">update</button>
                            </a>

                            <a href="viewInstitute.php?id='.$id.'">
                                <button type="button" class="btn btn-primary btn-sm" style="background-color: #00838F; border-color: #00838F;">view</button>
                            </a>

                            <a href="hideInstitute.php?id='.$id.'">
                                <button type="button" class="btn btn-primary btn-sm" style="background-color: #D32F2F; border-color: #D32F2F;">hide</button>
                            </a>

                            <p></p>

                            
                        </div>
                       
                    </div>
                </div>  
                <hr>
            
            ';
        }
    } 
    else {
        $sql = "SELECT * FROM institution WHERE visibility = 1 ORDER BY institutionID DESC";
        $result=mysqli_query($db, $sql);

        while($row = mysqli_fetch_array($result, MYSQLI_NUM)) {

            $name = base64_decode($row[0]);
            $latitude = $row[1]; 
            $longitude = $row[2];
            $phone = $row[3];
            $category = $row[4];
            $id = $row[5];
            $location = base64_decode($row[8]);

            $output .= '
            
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12" style = "box-shadow: 0 8px 6px -6px black; background-color: #e6ecf7">

                            <h3 style="color: black;"><b>Institution name:</b> '.$name.'</h3>
                            
                            <p style="color: black;"><b>Category :</b> '.$category.'</p>
                            <p style="color: black;"><b>Address:</b> '.$location.'</p>
                            <p style="color: black;"><b>Phone Number:</b> '.$phone.'</p>

                            <a href="updateInstitute.php?id='.$id.'">
                                <button type="button" class="btn btn-primary btn-sm" style="background-color: #2E7D32; border-color: #2E7D32;">update</button>
                            </a>

                            <a href="viewInstitute.php?id='.$id.'">
                                <button type="button" class="btn btn-primary btn-sm" style="background-color: #00838F; border-color: #00838F;">view</button>
                            </a>

                            <a href="hideInstitute.php?id='.$id.'">
                                <button type="button" class="btn btn-primary btn-sm" style="background-color: #D32F2F; border-color: #D32F2F;">hide</button>
                            </a>

                            <p></p>
                        </div>
                       
                    </div>
                </div>  
                <hr>
            
            ';
        }
    }

                    
    mysqli_close($db);                
    echo($output);
?> 


                </div>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                $('#sidebarCollapse').on('click', function () {
                    $('#sidebar').toggleClass('active');
                });
            });
        </script>

        <?php  

        include 'footer.php';

        ?>

    </body>
</html>

       