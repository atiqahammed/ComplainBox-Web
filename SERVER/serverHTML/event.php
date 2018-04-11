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
        <title>Events - Complain Box</title>


        <style type="text/css">
    

            time.icon span
            {
              font-size: 2.8em;
              letter-spacing: -0.05em;
              padding-top: 0.8em;
              color: #2f2f2f;
            }

            time.icon em
            {
              position: absolute;
              bottom: 0.3em;
              color: #fd9f1b;
            }
            time.icon strong
            {
              position: absolute;
              top: 0;
              padding: 0.4em 0;
              color: #fff;
              background-color: #fd9f1b;
              border-bottom: 1px dashed #f37302;
              box-shadow: 0 2px 0 #fd9f1b;
            }

            time.icon *
            {
              display: block;
              width: 100%;
              font-size: 1em;
              font-weight: bold;
              font-style: normal;
              text-align: center;
            }

            time.icon
            {
              font-size: 1em; /* change icon size */
              display: block;
              position: relative;
              width: 7em;
              height: 7em;
              background-color: #fff;
              border-radius: 0.6em;
              box-shadow: 0 1px 0 #bdbdbd, 0 2px 0 #fff, 0 3px 0 #bdbdbd, 0 4px 0 #fff, 0 5px 0 #bdbdbd, 0 0 0 1px #bdbdbd;
              overflow: hidden;
            }
    </style>




    </head>
    <body>

        <div class="wrapper">
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
                            </button>
                            
                        </div>

                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav navbar-right">

                            	<li><h2>Events</h2></li>
                            </ul>
                        </div>
                    </div>
                </nav>

                
                <!--<label for="meeting">Meeting Date : </label><input id="meeting" type="date" value="2011-01-13"/> -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" style="background-color: #009688;">Add New Event</button>
                <hr>

                <div id="load_data"></div>
                <div id="load_data_message"></div>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>


                
                <!--
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-10">

                        <h3>event name</h3>
                        <p>event descriotion<p>
                        <p>publishing date</p>

                        </div>
                        <div class="col-md-2">
                            
                            <time datetime="2014-09-20" class="icon">
                                
                                <em>9:0ap</em>
                                <strong>September</strong>
                                <span>20</span>
                            </time>


                        </div>
                    </div>
                </div>
            -->


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
                            
                                <form action="../serverPHP/addNewEvent.php" method="POST" enctype="multipart/form-data">

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Event Name</label>
                                        <input type="text" name="text" maxlength="100" class="form-control" placeholder="" required>
                                    </div>


                                    <div class="form-group">
                                        <label class="control-label">Event Date & Time</label>
                                        <div class="controls input-append date form_datetime" data-date="2018-01-01T05:25:07Z" data-date-format="dd/MM/yyyy - HH:ii p" data-link-field="dtp_input1">
                                            <input name="dateAndTime" size="16" class="form-control" type="text" required>
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
    </body>
</html>


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






</script>




        <!--<script type="text/javascript" src="./jquery/jquery-1.8.3.min.js" charset="UTF-8"></script> -->
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
