<?php  
    include 'includesAdminPanel/sessionSrartForAdmin.php';
?>

<!DOCTYPE html>
<html>
    <head>
        
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="icon" href="../pictures/icon/complain.png">
        <!-- Bootstrap CSS CDN -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <!-- Our Custom CSS -->
        <link rel="stylesheet" href="../myCss/home.css">
        


        <!-- ajax-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>




        <title>Application Forms - Complain Box</title>

    </head>
    <body>






        <div class="wrapper">
            <!-- Sidebar Holder -->
            <nav id="sidebar">
                <div class="sidebar-header">
                    <h3>Complain Box</h3>
                    <strong>CB</strong>
                </div>

                <ul class="list-unstyled components">
                    <li>
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

                    <li >
                        <a href="event.php">
                            <i class="glyphicon glyphicon-calendar"></i>
                            Events
                        </a>
                    </li>

                    <li >
                        <a href="notice.php">
                            <i class="glyphicon glyphicon-list-alt"></i>
                            Notices
                        </a>
                    </li>

                    <li class="active">
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

                    <?php
                        include 'includesAdminPanel/adminLogout.php';
                    ?>
                </ul>
            </nav>

            <!-- Page Content Holder -->
            <div id="content" style="width: 100%">

                <nav class="navbar navbar-default">
                    <div class="container-fluid">

                        <div class="navbar-header">
                            <button type="button" id="sidebarCollapse" class="btn btn-info navbar-btn" style="background-color: #009688;">
                                <i class="glyphicon glyphicon-align-left"></i>
                                <!--<span>Toggle Sidebar</span>-->
                            </button>
                            
                        </div>

                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1"> 
                            <ul class="nav navbar-nav navbar-right">

                                <li><h2>Application Forms</h2></li>
                            </ul>
                        </div>
                    </div>
                </nav>



                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" style="background-color: #009688;">Add Application Form
                </button>
                <hr>


                <div id="load_data"></div>
                <div id="load_data_message"></div>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header" style="background-color: #009688;">
                                <h3 class="modal-title" id="exampleModalLabel" style="color: white;">New Application Form</h3>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                            
                                <form action="../serverPHP/addApplicationForm.php" method="POST" enctype="multipart/form-data">

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Application Form Title</label>
                                        <input type="text" name="text" maxlength="100" class="form-control" placeholder="" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Description</label>
                                        <textarea name="description" maxlength="500" class="form-control" rows="5" id="applicationFormDescription" required></textarea>
                                    </div>

                                    <div class="form-group">
                                        <input type="file" name="file" required>
                                        <small id="fileHelp" class="form-text text-muted">Please upload a pdf file.</small>
                                    </div>

                                   
                                    
                                    <button type="submit" name="submit" class="btn btn-primary" style="background-color: #009688;">Add</button>
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </form>
                            </div>
                        <div class="modal-footer">
                        <p>Form for adding new application form.</p>

                      </div>
                    </div>
                  </div>
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

    


    <?php  
        /*
        if(isset($_GET['message']) == true) {
                      //if($_GET['error'] == 2) {
            echo '<script>window.alert("Application added successfully");</script>';
                      //}
        }
        */

        if(isset($_GET['error']) == true) {
            if($_GET['error'] == 1) {
                echo '<script>window.alert("Sorry your application form is not added. Please upload a pdf");</script>';
            }
            if($_GET['error'] == 2) {
                echo '<script>window.alert("Sorry your application form is not added. Please upload a small file");</script>';
            }
        }

    ?>



</html>

<script>
    
    $(document).ready(function(){

        var limit = 5;
        var start = 0;
        var action = 'inactive';
        function load_application_form_data(limit, start) {
            $.ajax({
                url: "fetchApplicationForm.php",
                method: "POST",
                data:{limit:limit, start:start},
                cache:false,
                success:function(data)
                {
                    $('#load_data').append(data);
                    if(data == '') {
                        $('#load_data_message').html("<hr><button type='button' class = 'btn btn-info'>No data Found</button>");
                        action = 'active';
                    } else {
                        $('#load_data_message').html("<hr><button type='button' class = 'btn btn-waiting'>please wait...</button>");
                        action = 'inactive';
                    }
                }
            });
        }

        if(action == 'inactive') {
            action = 'active';
            load_application_form_data(limit, start);
        }

        $(window).scroll(function(){
           
            if($(window).scrollTop() + $(window).height() > $("#load_data").height() && action == 'inactive') {
                    action = 'active';
                    start = start + limit;
                    timeOutId = setTimeout(function(){
                        load_application_form_data(limit, start);
                    }, 1000);
            }

        });


    });


</script>


