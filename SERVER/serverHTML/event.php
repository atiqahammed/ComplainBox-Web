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
                            <h1>Events</h1>
                        </div>

                        <div class="col-md-2">
                            <iframe scrolling="no" frameborder="no" clocktype="html5" style="overflow:hidden;border:0;margin:0;padding:0;width:150px;height:150px;"src="https://www.clocklink.com/html5embed.php?clock=041&timezone=Bangladesh_Dhaka&color=green&size=150&Title=&Message=&Target=&From=2018,1,1,0,0,0&Color=#009688"></iframe>
                        </div>


                    </div>
                    <hr>
                </div>


                <a href="addNewEvent.php">
                    <button type="button" class="btn btn-primary btn-sm" style="background-color: #009688;">New Event</button>
                </a>
               
                <hr>

                <div id="load_data"></div>
                <div id="load_data_message"></div>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>


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
