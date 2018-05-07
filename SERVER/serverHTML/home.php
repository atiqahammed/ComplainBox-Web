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


        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">


        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>  
   

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
                    <li class="active">
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
                            <h1>Home</h1>
                        </div>

                        <div class="col-md-2">
                            <iframe scrolling="no" frameborder="no" clocktype="html5" style="overflow:hidden;border:0;margin:0;padding:0;width:150px;height:150px;"src="https://www.clocklink.com/html5embed.php?clock=041&timezone=Bangladesh_Dhaka&color=green&size=150&Title=&Message=&Target=&From=2018,1,1,0,0,0&Color=#009688"></iframe>
                            
                        </div>


                    </div>
                    <hr>
                </div>


                

                <div id="load_data"></div>
                <div id="load_data_message"></div>


                <hr>

                <!-- start of slide show-->


                <script src="js/jssor.slider-27.1.0.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        jssor_1_slider_init = function() {

            var jssor_1_SlideshowTransitions = [
              {$Duration:500,$Delay:12,$Cols:10,$Rows:5,$Opacity:2,$Clip:15,$SlideOut:true,$Formation:$JssorSlideshowFormations$.$FormationStraightStairs,$Assembly:2049,$Easing:$Jease$.$OutQuad},
              {$Duration:500,$Delay:40,$Cols:10,$Rows:5,$Opacity:2,$Clip:15,$SlideOut:true,$Easing:$Jease$.$OutQuad},
              {$Duration:1000,x:-0.2,$Delay:20,$Cols:16,$SlideOut:true,$Formation:$JssorSlideshowFormations$.$FormationStraight,$Assembly:260,$Easing:{$Left:$Jease$.$InOutExpo,$Opacity:$Jease$.$InOutQuad},$Opacity:2,$Outside:true,$Round:{$Top:0.5}},
              {$Duration:1600,y:-1,$Delay:40,$Cols:24,$SlideOut:true,$Formation:$JssorSlideshowFormations$.$FormationStraight,$Easing:$Jease$.$OutJump,$Round:{$Top:1.5}},
              {$Duration:1200,x:0.2,y:-0.1,$Delay:16,$Cols:10,$Rows:5,$Opacity:2,$Clip:15,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$Formation:$JssorSlideshowFormations$.$FormationStraightStairs,$Assembly:260,$Easing:{$Left:$Jease$.$InWave,$Top:$Jease$.$InWave,$Clip:$Jease$.$OutQuad},$Round:{$Left:1.3,$Top:2.5}},
              {$Duration:1500,x:0.3,y:-0.3,$Delay:20,$Cols:10,$Rows:5,$Opacity:2,$Clip:15,$During:{$Left:[0.2,0.8],$Top:[0.2,0.8]},$Formation:$JssorSlideshowFormations$.$FormationStraightStairs,$Assembly:260,$Easing:{$Left:$Jease$.$InJump,$Top:$Jease$.$InJump,$Clip:$Jease$.$OutQuad},$Round:{$Left:0.8,$Top:2.5}},
              {$Duration:1500,x:0.3,y:-0.3,$Delay:20,$Cols:10,$Rows:5,$Opacity:2,$Clip:15,$During:{$Left:[0.1,0.9],$Top:[0.1,0.9]},$SlideOut:true,$Formation:$JssorSlideshowFormations$.$FormationStraightStairs,$Assembly:260,$Easing:{$Left:$Jease$.$InJump,$Top:$Jease$.$InJump,$Clip:$Jease$.$OutQuad},$Round:{$Left:0.8,$Top:2.5}}
            ];

            var jssor_1_options = {
              $AutoPlay: 1,
              $SlideshowOptions: {
                $Class: $JssorSlideshowRunner$,
                $Transitions: jssor_1_SlideshowTransitions,
                $TransitionsOrder: 1
              },
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
              }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            /*#region responsive code begin*/

            var MAX_WIDTH = 980;

            function ScaleSlider() {
                var containerElement = jssor_1_slider.$Elmt.parentNode;
                var containerWidth = containerElement.clientWidth;

                if (containerWidth) {

                    var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                    jssor_1_slider.$ScaleWidth(expectedWidth);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }

            ScaleSlider();

            $Jssor$.$AddEvent(window, "load", ScaleSlider);
            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
            /*#endregion responsive code end*/
        };
    </script>
    <style>
        /*jssor slider loading skin spin css*/
        .jssorl-009-spin img {
            animation-name: jssorl-009-spin;
            animation-duration: 1.6s;
            animation-iteration-count: infinite;
            animation-timing-function: linear;
        }

        @keyframes jssorl-009-spin {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }

        /*jssor slider bullet skin 053 css*/
        .jssorb053 .i {position:absolute;cursor:pointer;}
        .jssorb053 .i .b {fill:#fff;fill-opacity:0.5;}
        .jssorb053 .i:hover .b {fill-opacity:.7;}
        .jssorb053 .iav .b {fill-opacity: 1;}
        .jssorb053 .i.idn {opacity:.3;}

        /*jssor slider arrow skin 093 css*/
        .jssora093 {display:block;position:absolute;cursor:pointer;}
        .jssora093 .c {fill:none;stroke:#fff;stroke-width:400;stroke-miterlimit:10;}
        .jssora093 .a {fill:none;stroke:#fff;stroke-width:400;stroke-miterlimit:10;}
        .jssora093:hover {opacity:.8;}
        .jssora093.jssora093dn {opacity:.6;}
        .jssora093.jssora093ds {opacity:.3;pointer-events:none;}
    </style>
    <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:980px;height:380px;overflow:hidden;visibility:hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
            <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="img/spin.svg" />
        </div>
        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:980px;height:380px;overflow:hidden;">
            <div data-p="170.00">
                <img data-u="image" src="img/img1.jpg" />
            </div>
            <div data-p="170.00">
                <img data-u="image" src="img/img3.jpg" />
            </div>
            <div data-p="170.00">
                <img data-u="image" src="img/img4.jpg" />
            </div>
            <div data-p="170.00">
                <img data-u="image" src="img/img2.jpg" />
            </div>
            <div data-p="170.00">
                <img data-u="image" src="img/img5.jpg" />
            </div>
            <div data-p="170.00">
                <img data-u="image" src="img/img6.jpg" />
            </div>

            <div data-p="170.00">
                <img data-u="image" src="img/img8.jpg" />
            </div>

            <div data-p="170.00">
                <img data-u="image" src="img/img14.jpg" />
            </div>
            <div data-p="170.00">
                <img data-u="image" src="img/img7.jpg" />
            </div>
            <div data-p="170.00">
                <img data-u="image" src="img/img9.jpg" />
            </div>

            <div data-p="170.00">
                <img data-u="image" src="img/img11.jpg" />
            </div>

            <div data-p="170.00">
                <img data-u="image" src="img/img13.jpg" />
            </div>

        </div>
        <!-- Bullet Navigator -->
        <div data-u="navigator" class="jssorb053" style="position:absolute;bottom:12px;right:12px;" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
            <div data-u="prototype" class="i" style="width:16px;height:16px;">
                <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                    <path class="b" d="M11400,13800H4600c-1320,0-2400-1080-2400-2400V4600c0-1320,1080-2400,2400-2400h6800 c1320,0,2400,1080,2400,2400v6800C13800,12720,12720,13800,11400,13800z"></path>
                </svg>
            </div>
        </div>
        <!-- Arrow Navigator -->
        <div data-u="arrowleft" class="jssora093" style="width:50px;height:50px;top:0px;left:30px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <circle class="c" cx="8000" cy="8000" r="5920"></circle>
                <polyline class="a" points="7777.8,6080 5857.8,8000 7777.8,9920 "></polyline>
                <line class="a" x1="10142.2" y1="8000" x2="5857.8" y2="8000"></line>
            </svg>
        </div>
        <div data-u="arrowright" class="jssora093" style="width:50px;height:50px;top:0px;right:30px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <circle class="c" cx="8000" cy="8000" r="5920"></circle>
                <polyline class="a" points="8222.2,6080 10142.2,8000 8222.2,9920 "></polyline>
                <line class="a" x1="5857.8" y1="8000" x2="10142.2" y2="8000"></line>
            </svg>
        </div>
    </div>
    <script type="text/javascript">jssor_1_slider_init();</script>







                <!--end of slide show-->




                
                <hr>
                

                <?php  
                    define('DB_SERVER', 'localhost');
                    define('DB_USERNAME', 'root');
                    define('DB_PASSWORD', '');
                    define('DB_DATABASE', 'testdb');
                    $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

                    $sql = "SELECT COUNT(*) FROM problem";
                    $result=mysqli_query($db, $sql);
                    $row = mysqli_fetch_array($result, MYSQLI_NUM);
                    $number_of_problems = $row[0];

                    $sql = "SELECT COUNT(*) FROM institution";
                    $result=mysqli_query($db, $sql);
                    $row = mysqli_fetch_array($result, MYSQLI_NUM);
                    $number_of_institution = $row[0];

                    $sql = "SELECT COUNT(*) FROM notice";
                    $result=mysqli_query($db, $sql);
                    $row = mysqli_fetch_array($result, MYSQLI_NUM);
                    $number_of_notice = $row[0];

                    $sql = "SELECT COUNT(*) FROM event";
                    $result=mysqli_query($db, $sql);
                    $row = mysqli_fetch_array($result, MYSQLI_NUM);
                    $number_of_event = $row[0];

                    $sql = "SELECT COUNT(*) FROM applicationform";
                    $result=mysqli_query($db, $sql);
                    $row = mysqli_fetch_array($result, MYSQLI_NUM);
                    $number_of_applicationform = $row[0];


                    echo '
                        <div class="container-fluid">
                            <div class="row">


                                <div class="col-md-2">
                                    <a href="notice.php">
                                        <div style = "box-shadow: 0 8px 6px -6px black; background-color: #db97a1; height: 150px;text-align: center;padding-top: 20px;" >

                                            <i class="glyphicon glyphicon-list-alt" style="font-size: 36px; border-width: 3px; border-style: solid; border-color: black; padding: 5px; box-shadow: 0 8px 6px -6px black; border-radius: 10px;"></i>
                                            <font size="7" style="color:black; padding-left: 8px;">'.' '.$number_of_notice.' '.'</font>
                                            <p style="color:black;">Provided notices</p>
                                        </div>
                                    </a>
                                </div>
                                
                                
                                
                                <div class="col-md-2">
                                    <a href="emergencySupport.php">
                                        <div style = "box-shadow: 0 8px 6px -6px black; background-color: #b5db97; height: 150px;text-align: center;padding-top: 20px;" >

                                            <i class="glyphicon glyphicon-bell" style="font-size: 36px; border-width: 3px; border-style: solid; border-color: black; padding: 5px; box-shadow: 0 8px 6px -6px black; border-radius: 10px;"></i>
                                            <font size="7" style="color:black; padding-left: 8px;">'.' '.$number_of_institution.' '.'</font>
                                            <p style="color:black;">Emergency instition</p>
                                        </div>
                                    </a>
                                    
                                </div>

                                <div class="col-md-4">
                                    <a href="problem.php">
                                        <div style = "box-shadow: 0 8px 6px -6px black; background-color: #db97d7; height: 150px;text-align: center;padding-top: 20px;" >

                                            <i class="glyphicon glyphicon-exclamation-sign" style="font-size: 36px; border-width: 3px; border-style: solid; border-color: black; padding: 5px; box-shadow: 0 8px 6px -6px black; border-radius: 10px;"></i>
                                            <font size="7" style="color:black; padding-left: 8px;">'.' '.$number_of_problems.' '.'</font>
                                            <p style="color:black;">Submitted Problems</p>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-md-2">
                                    <a href="event.php">
                                        <div style = "box-shadow: 0 8px 6px -6px black; background-color: #dbd897; height: 150px;text-align: center;padding-top: 20px;" >

                                            <i class="glyphicon glyphicon-calendar" style="font-size: 36px; border-width: 3px; border-style: solid; border-color: black; padding: 5px; box-shadow: 0 8px 6px -6px black; border-radius: 10px;"></i>
                                            <font size="7" style="color:black; padding-left: 8px;">'.' '.$number_of_event.' '.'</font>
                                            <p style="color:black;">Total events of DSCC</p>
                                        </div>
                                    </a>
                                    
                                </div>

                                <div class="col-md-2">
                                    <a href="applicationForm.php">
                                        <div style = "box-shadow: 0 8px 6px -6px black; background-color: #97d7db; height: 150px;text-align: center;padding-top: 20px;" >

                                            <i class="glyphicon glyphicon-file" style="font-size: 36px; border-width: 3px; border-style: solid; border-color: black; padding: 5px; box-shadow: 0 8px 6px -6px black; border-radius: 10px;"></i>
                                            <font size="7" style="color:black; padding-left: 8px;">'.' '.$number_of_applicationform.' '.'</font>
                                            <p style="color:black;">Total application forms</p>
                                        </div>
                                    </a>
                                    
                                </div>

                            </div>
                        </div>
                        <hr>

                    ';

                ?>

                <div class="container-fluid">
                    <div class="row">
                                
                        <div class="col-md-12">

                            <script type="text/javascript">
                                google.charts.load("current", {packages:["corechart"]});
                                google.charts.setOnLoadCallback(drawChart);
                                function drawChart() {
                                    var data = google.visualization.arrayToDataTable([
                                    ['Status', 'Number of Problems'],
                                  
                                    <?php  
                                    $sql = "SELECT status, COUNT(status) FROM problem GROUP BY (status)";
                                    $result=mysqli_query($db, $sql);

                                    while($row = mysqli_fetch_array($result, MYSQLI_NUM)) {

                                        echo "['".$row[0]."', ".$row[1]."],";
                                    }

                                    ?>
                                    
                                    ]);

                                    var options = {
                                    title: 'Pie chart of problem status',
                                    is3D: true,
                                    };

                                    var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
                                    chart.draw(data, options);
                                }
                            </script>
                        
                            <div style = "box-shadow: 0 8px 6px -6px black; background-color: #ffffff; text-align: center;">
                                <div id="piechart_3d" style="width: 100%; height: 500px; "></div>
                            </div>

                        </div>
                    </div>
                </div>

                <hr>


                <div class="container-fluid">
                    <div class="row">
                                
                        <div class="col-md-12">

                            <script type="text/javascript">
                                google.charts.load('current', {'packages':['bar']});
                                google.charts.setOnLoadCallback(drawStuff);

                                function drawStuff() {
                                var data = new google.visualization.arrayToDataTable([
                                    ['Category', 'number of problems'],
                                      
                                    <?php  
                                      
                                        $sql = "SELECT category, COUNT(category) FROM problem GROUP BY (category)";
                                        $result=mysqli_query($db, $sql);

                                        while($row = mysqli_fetch_array($result, MYSQLI_NUM)) {

                                            echo "['".$row[0]."', ".$row[1]."],";  
                                        }

                                      ?>


                            
                                    ]);

                                    var options = {
                                      title: 'Bar chart of problem category',
                                      width: 900,
                                      legend: { position: 'none' },
                                      chart: { title: 'Problem Categories',
                                               subtitle: 'Bar chart of problems category' },
                                      bars: 'horizontal', // Required for Material Bar Charts.
                                      axes: {
                                        x: {
                                          0: { side: 'top', label: 'Nmuber of problems'} // Top x-axis.
                                        }
                                      },
                                      bar: { groupWidth: "90%" }
                                    };

                                    var chart = new google.charts.Bar(document.getElementById('top_x_div'));
                                    chart.draw(data, options);
                                  };
                                </script>
                        
                            <div style = "box-shadow: 0 8px 6px -6px black; background-color: #ffffff; text-align: center;">
                                <div id="top_x_div" style="width: 100%; height: 500px;"></div>
                            </div>

                        </div>
                    </div>
                </div>

                <hr>

                <div class="container-fluid">
                    <div class="row">
                                
                        <div class="col-md-12">

                            <script type="text/javascript">
                                google.charts.load('current', {'packages':['bar']});
                                google.charts.setOnLoadCallback(drawChart);

                                function drawChart() {
                                    var data = google.visualization.arrayToDataTable([
                                    ['Category', 'In Consideration', 'In Progress', 'Solved'],
          
                                    <?php  
                                  
                                        $categoryAndSolved = array();
                                        $categoryAndCons = array();
                                        $categoryAndProgress = array();

                                        
                                        $categoryAndSolved["Road Damage"] = 0;
                                        $categoryAndSolved["Garbage"] = 0;
                                        $categoryAndSolved["Footpath"] = 0;
                                        $categoryAndSolved["Drainage"] = 0;
                                        $categoryAndSolved["Road Light"] = 0;
                                        $categoryAndSolved["Mosquito"] = 0;
                                        $categoryAndSolved["Illegal Parking"] = 0;
                                        $categoryAndSolved["Curruption"] = 0;
                                        $categoryAndSolved["Repair"] = 0;
                                        $categoryAndSolved["Others"] = 0;

                                        $categoryAndProgress["Road Damage"] = 0;
                                        $categoryAndProgress["Garbage"] = 0;
                                        $categoryAndProgress["Footpath"] = 0;
                                        $categoryAndProgress["Drainage"] = 0;
                                        $categoryAndProgress["Road Light"] = 0;
                                        $categoryAndProgress["Mosquito"] = 0;
                                        $categoryAndProgress["Illegal Parking"] = 0;
                                        $categoryAndProgress["Curruption"] = 0;
                                        $categoryAndProgress["Repair"] = 0;
                                        $categoryAndProgress["Others"] = 0;

                                        $categoryAndCons["Road Damage"] = 0;
                                        $categoryAndCons["Garbage"] = 0;
                                        $categoryAndCons["Footpath"] = 0;
                                        $categoryAndCons["Drainage"] = 0;
                                        $categoryAndCons["Road Light"] = 0;
                                        $categoryAndCons["Mosquito"] = 0;
                                        $categoryAndCons["Illegal Parking"] = 0;
                                        $categoryAndCons["Curruption"] = 0;
                                        $categoryAndCons["Repair"] = 0;
                                        $categoryAndCons["Others"] = 0;

                                        
                                        $sql = "SELECT T1.category as category, COUNT(*) as solved FROM problem T1 where T1.status='solved' GROUP BY T1.category";
                                        $result=mysqli_query($db, $sql);

                                        while($row = mysqli_fetch_array($result, MYSQLI_NUM)) {
                                            $categoryAndSolved[$row[0]] += $categoryAndSolved[$row[0]] + $row[1];  
                                        }

                                        $sql = "SELECT T1.category as category, COUNT(*) as solved FROM problem T1 where T1.status='in progress' GROUP BY T1.category";
                                        $result=mysqli_query($db, $sql);

                                        while($row = mysqli_fetch_array($result, MYSQLI_NUM)) {
                                            $categoryAndProgress[$row[0]] += $categoryAndProgress[$row[0]] + $row[1];  
                                        }

                                        $sql = "SELECT T1.category as category, COUNT(*) as solved FROM problem T1 where T1.status='in consideration' GROUP BY T1.category";
                                        $result=mysqli_query($db, $sql);

                                        while($row = mysqli_fetch_array($result, MYSQLI_NUM)) {
                                            $categoryAndCons[$row[0]] += $categoryAndCons[$row[0]] + $row[1];  
                                        }

                                        echo "['Road Damage', ".$categoryAndCons["Road Damage"].", ".$categoryAndProgress["Road Damage"].", ".$categoryAndSolved["Road Damage"]."],";
                                        echo "['Garbage', ".$categoryAndCons["Garbage"].", ".$categoryAndProgress["Garbage"].", ".$categoryAndSolved["Garbage"]."],";
                                        echo "['Footpath', ".$categoryAndCons["Footpath"].", ".$categoryAndProgress["Footpath"].", ".$categoryAndSolved["Footpath"]."],";
                                        echo "['Drainage', ".$categoryAndCons["Drainage"].", ".$categoryAndProgress["Drainage"].", ".$categoryAndSolved["Drainage"]."],";
                                        echo "['Road Light', ".$categoryAndCons["Road Light"].", ".$categoryAndProgress["Road Light"].", ".$categoryAndSolved["Road Light"]."],";
                                        echo "['Mosquito', ".$categoryAndCons["Mosquito"].", ".$categoryAndProgress["Mosquito"].", ".$categoryAndSolved["Mosquito"]."],";
                                        echo "['Illegal Parking', ".$categoryAndCons["Illegal Parking"].", ".$categoryAndProgress["Illegal Parking"].", ".$categoryAndSolved["Illegal Parking"]."],";
                                        echo "['Curruption', ".$categoryAndCons["Curruption"].", ".$categoryAndProgress["Curruption"].", ".$categoryAndSolved["Curruption"]."],";
                                        echo "['Repair', ".$categoryAndCons["Repair"].", ".$categoryAndProgress["Repair"].", ".$categoryAndSolved["Repair"]."],";
                                        echo "['Others', ".$categoryAndCons["Others"].", ".$categoryAndProgress["Others"].", ".$categoryAndSolved["Others"]."],";
                    
                                    ?>
                                ]);

                                var options = {
                                  chart: {
                                    title: 'Problem category with status',
                                    subtitle: 'Simple view of all status of all problems of all category.',
                                  }
                                };

                                var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

                                chart.draw(data, google.charts.Bar.convertOptions(options));
                            }
                        </script>
                        
                            <div style = "box-shadow: 0 8px 6px -6px black; background-color: #ffffff; text-align: center;">
                                <div id="columnchart_material" style="width: 100%; height: 500px;"></div>
                            </div>

                        </div>
                    </div>
                </div>

                <hr>




                <div class="container-fluid">
                    <div class="row">
                                
                        <div class="col-md-12">

                            <script type="text/javascript">
                                google.charts.load('current', {'packages':['bar']});
                                google.charts.setOnLoadCallback(drawStuff);

                                function drawStuff() {
                                    var data = new google.visualization.arrayToDataTable([
                                    ['Ward no. ', 'Number of Problems'],
                                        <?php  
                                      
                                        $sql = "SELECT wardNo, COUNT(wardNo) FROM problem GROUP BY (wardNo)";
                                        $result=mysqli_query($db, $sql);

                                        while($row = mysqli_fetch_array($result, MYSQLI_NUM)) {

                                            echo "['Ward No. ".$row[0]."', ".$row[1]."],";  
                                        }

                                        mysqli_close($db);

                                        ?>
                                    ]);

                                    var options = {
                                      width: 800,
                                      legend: { position: 'none' },
                                      chart: {
                                        title: 'Problems in all Wards in DSCC',
                                        subtitle: 'Bar chart of all wards problems.' },
                                      axes: {
                                        x: {
                                          0: { side: 'top', label: 'Wards of DSCC'} // Top x-axis.
                                        }
                                      },
                                      bar: { groupWidth: "90%" }
                                    };

                                    var chart = new google.charts.Bar(document.getElementById('top_ward_div'));
                                    // Convert the Classic options to Material options.
                                    chart.draw(data, google.charts.Bar.convertOptions(options));
                                };
                            </script>
                        
                            <div style = "box-shadow: 0 8px 6px -6px black; background-color: #ffffff; text-align: center;">
                                <div id="top_ward_div" style="width: 100%; height: 600px;"></div>
                            </div>

                        </div>
                    </div>
                </div>

                <hr>
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


        <?php  
            include 'footer.php';
        ?>


         
    </body>
</html>