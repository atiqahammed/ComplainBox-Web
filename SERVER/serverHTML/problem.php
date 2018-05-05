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


        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>  

        <script type="text/javascript">
            
            function searchq() {

                var searchTxt = $("input[name='search']").val();
                //alert(searchTxt);
                $.post("problemFetch.php", {searchVal: searchTxt}, function(output){
                    $("#output").html(output);
                });


            }




        </script>      

    </head>
    <body>


        <!-- my navigation -->
        <nav class="navbar navbar-light" style="background-color: #009688;">
        <title>Problems - Complain Box</title>

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


                    <li  class="active">
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
                            <h1>Problems</h1>
                        </div>

                        <div class="col-md-2">
                            
                        </div>


                    </div>
                    <hr>
                </div>


                <a href="problemForm.php">
                    <button type="button" class="btn btn-primary btn-sm" style="background-color: #009688;">New</button>
                </a>
               
                <hr>

                <div id="load_data"></div>
                <div id="load_data_message"></div>
                

                <form action="problem.php" method="POST" >
                    
                    <div class="container-fluid">
                        <div class="row no-gutters">
                            <div class="col-md-3">

                                <div class="form-group">
                                    <input type="text" name="search" class="form-control" placeholder="" >
                                    <br>
                                    <button type="submit" name="submit" class="btn btn-primary" style="background-color: #009688;">search</button>
                                </div>
                                
                            <div class="col-md-3">
                                
                            </div>

                            <div class="col-md-3">
                                
                            </div>

                            <div class="col-md-3">
                            </div>


                        </div>
                        
                    </div>
                </form>

                <br>
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
        $sql = "SELECT * FROM problem WHERE problemID LIKE '%$searchq%' OR category LIKE '%$searchq%' OR description LIKE '%$searchq%' OR latitude LIKE '%$searchq%' OR longitude LIKE '%$searchq%' OR wardNo Like '%$searchq%' OR priority LIKE '%$searchq%' OR status LIKE '%$searchq%' OR email LIKE '%$searchq%'";

        $result=mysqli_query($db, $sql);

        while($row = mysqli_fetch_array($result, MYSQLI_NUM)) {

           // echo $row[0].'<br>';
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



            $output .= '

                <div>
                    
                    <p style="color: black;">Problem ID: '.$problem_id.'</p>
                    <p style="color: black;">Problem Category: '.$category.'</p>

                    
                    <p style="color: black;">Statu: '.$status.'</p>

                    
                    <p style="color: black;">Priority: '.$prio.'</p>
                    <br>

                    
                    <p style="color: black; text-align: justify;">'.$decription.'</p>

                </div>

                <hr>
            ';

        }



    } 

    else {

        $sql = "SELECT * FROM problem";
        $result=mysqli_query($db, $sql);

        while($row = mysqli_fetch_array($result, MYSQLI_NUM)) {

           // echo $row[0].'<br>';
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



            $output .= '

                <div>
                    
                    <p style="color: black;">Problem ID: '.$problem_id.'</p>
                    <p style="color: black;">Problem Category: '.$category.'</p>

                    
                    <p style="color: black;">Statu: '.$status.'</p>

                    
                    <p style="color: black;">Priority: '.$prio.'</p>
                    <br>

                    
                    <p style="color: black; text-align: justify;">'.$decription.'</p>

                </div>

                <hr>
            ';

        }




    }

                    

                    
echo($output);


?>

                    
                </div>


            </div>
        </div>

        <!-- jQuery CDN -->
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


<!--
<script>
    
    $(document).ready(function(){

        var limit = 5;
        var start = 0;
        var action = 'inactive';
        function load_event_data(limit, start) {
            $.ajax({
                url: "fetchEvent.php",
                method: "POST",
                data:{limit:limit, start:start},
                cache:false,
                success:function(data)
                {
                    $('#load_data').append(data);
                    if(data == '') {
                        $('#load_data_message').html("<hr><button type='button' class = 'btn btn-info'>No Data Found</button>");
                        action = 'active';
                    } else {
                        $('#load_data_message').html("<hr><button type='button' class = 'btn btn-waiting'>Loading ...</button>");
                        action = 'inactive';
                    }
                }
            });
        }

        if(action == 'inactive') {
            action = 'active';
            load_event_data(limit, start);
        }

        $(window).scroll(function(){
           
            if($(window).scrollTop() + $(window).height() > $("#load_data").height() && action == 'inactive') {
                    action = 'active';
                    start = start + limit;
                    timeOutId = setTimeout(function(){
                        load_event_data(limit, start);
                    }, 1000);
            }

        });


    });


</script>

-->
        
