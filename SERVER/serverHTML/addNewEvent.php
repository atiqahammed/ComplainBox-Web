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
        <title>New Event - Complain Box</title>

    </head>
    <body>


        <!-- my navigation -->
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

                    <!-- active event  -->
                    <li class="active">
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
                            <h1>New Event</h1>
                        </div>

                        <div class="col-md-2">
                        </div>


                    </div>
                    <hr>
                </div>

               

                <form action="../serverPHP/addNewEvent.php" method="POST" enctype="multipart/form-data">

                    <div class="form-group">
                        <label for="exampleInputEmail1">Event Name</label>
                        <input type="text" name="text" maxlength="100" class="form-control" placeholder="" required>
                    </div>

                    <div class="form-group">
                        <label class="control-label">Event Date & Time</label>
                        <div class="controls input-append date form_datetime" data-date="2018-01-01T05:25:07Z" data-date-format="dd/MM/yyyy - HH:ii p" data-link-field="dtp_input1">
                            <input name="dateAndTime" size="16" value="01/January/2018 - 12:00 am" class="form-control" type="text" readonly>
                            <span class="add-on"><i class="icon-remove"></i></span>
                            <span class="add-on"><i class="icon-th"></i></span> 
                        </div>
                        <input type="hidden" id="dtp_input1" value="" />
                    </div>
                                    

                    <div class="form-group">
                        <label for="exampleInputPassword1">Description</label>
                        <textarea name="description" maxlength="500" class="form-control" rows="5" id="applicationFormDescription" required></textarea>
                    </div>
                                    

                    <button type="submit" name="submit" class="btn btn-primary" style="background-color: #009688;">Add</button>
                        <a href="event.php">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Back</button>
                        </a>
                </form>

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
