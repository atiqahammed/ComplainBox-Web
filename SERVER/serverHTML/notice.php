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


        <!--<link href="./bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">-->
        <link href="../css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">




 



        <title>Notices - Complain Box</title>


    </head>
    <body>



        <div class="wrapper">
            <!-- Sidebar Holder --> <!-- start of nav bar -->
            <nav id="sidebar">
                <div class="sidebar-header">
                    <h3>Complain Box</h3>
                    <strong>CB</strong>
                </div>

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
                    <li >
                        <a href="event.php">
                            <i class="glyphicon glyphicon-calendar"></i>
                            Events
                        </a>
                    </li>

                    <!-- active session for notice -->
                    <li class="active">
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

                    
                    <?php
                        include 'includesAdminPanel/adminLogout.php';
                    ?>

                </ul>

            </nav>
            <!-- end of nav bar -->




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

                            	<li><h2>Notices</h2></li>
                            </ul>
                        </div>
                    </div>
                </nav>

                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" style="background-color: #009688;">Add New Notice</button>
                <hr>

                

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header" style="background-color: #009688;">
                                <h3 class="modal-title" id="exampleModalLabel" style="color: white;">New Notice</h3>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                            
                                <form action="../serverPHP/addNewNotice.php" method="POST" enctype="multipart/form-data">

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Notice Title</label>
                                        <input type="text" name="text" maxlength="100" class="form-control" placeholder="" required>
                                    </div>


                                    <div class="form-group">
                                        <label class="control-label">DateTime Picking</label>
                                        <div class="controls input-append date form_datetime" data-date="1979-09-16T05:25:07Z" data-date-format="dd MM yyyy - HH:ii p" data-link-field="dtp_input1">
                                            <input size="16" class="form-control" type="text" value="" readonly>
                                            <span class="add-on"><i class="icon-remove"></i></span>
                                            <span class="add-on"><i class="icon-th"></i></span> 
                                        </div>
                                        <input type="hidden" id="dtp_input1" value="" /><br/>
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
                        <p>Form for adding new notice.</p>
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




         <script type="text/javascript" src="./jquery/jquery-1.8.3.min.js" charset="UTF-8"></script>
<script type="text/javascript" src="./bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
<script type="text/javascript" src="../js/locales/bootstrap-datetimepicker.fr.js" charset="UTF-8"></script>
<script type="text/javascript">
    $('.form_datetime').datetimepicker({
        //language:  'fr',
        weekStart: 1,
        todayBtn:  1,
        autoclose: 1,
        todayHighlight: 1,
        startView: 2,
        forceParse: 0,
        showMeridian: 1
    });
    $('.form_date').datetimepicker({
        language:  'fr',
        weekStart: 1,
        todayBtn:  1,
        autoclose: 1,
        todayHighlight: 1,
        startView: 2,
        minView: 2,
        forceParse: 0
    });
    $('.form_time').datetimepicker({
        language:  'fr',
        weekStart: 1,
        todayBtn:  1,
        autoclose: 1,
        todayHighlight: 1,
        startView: 1,
        minView: 0,
        maxView: 1,
        forceParse: 0
    });
</script>



















    </body>


    <?php  
        include 'includesAdminPanel/pdfFileError.php';
    ?>



</html>


