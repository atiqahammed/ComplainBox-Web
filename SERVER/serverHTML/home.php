<?php
session_start();

if(!isset($_SESSION["email"]))
{
    header("location: ../../index.php");
}

?>



<!DOCTYPE html>
<html>
    <head>
    	<meta charset="utf-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    	<title>Home - Complain Box</title>


        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


        <!-- customized -->
        <link rel="icon" href="SERVER/pictures/icon/complain.png">
        <link rel="stylesheet" type="text/css" href="SERVER/myCss/style002.css">



        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <link rel="icon" href="../pictures/icon/complain.png">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="../myCss/style002.css">
 

        
       
        


     <style type="text/css">
         

     
        @import "https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700";


        body {
            font-family: 'Poppins', sans-serif;
            background: #fafafa;
        }

        p {
            font-family: 'Poppins', sans-serif;
            font-size: 1.1em;
            font-weight: 300;
            line-height: 1.7em;
            color: #999;
        }

        a, a:hover, a:focus {
            color: inherit;
            text-decoration: none;
            transition: all 0.3s;
        }

        .navbar {
            /*padding: 15px 10px;*/
            background: #fff;
            border: none;
            border-radius: 0;
            /*margin-bottom: 40px;*/
            box-shadow: 1px 1px 3px rgba(0, 0, 0, 0.1);
        }


        .navbar-btn {
            box-shadow: none;
            outline: none !important;
            border: none;
        }

        .line {
            width: 100%;
            height: 1px;
            border-bottom: 1px dashed #ddd;
            margin: 40px 0;
        }

        i, span {
            display: inline-block;
        }

        /* ---------------------------------------------------
            SIDEBAR STYLE
        ----------------------------------------------------- */
        .wrapper {
            display: flex;
            align-items: stretch;
        }

        #sidebar {
            min-width: 250px;
            max-width: 250px;
            /*background: #7386D5;*/
            background: #009688; 
            color: #fff;
            transition: all 0.3s;
        }



        #sidebar.active {
            min-width: 80px;
            max-width: 80px;
            text-align: center;
        }

        #sidebar.active .sidebar-header h3, #sidebar.active .CTAs {
            display: none;
        }

        #sidebar.active .sidebar-header strong {
            display: block;
        }

        #sidebar ul li a {
            text-align: left;
        }

        #sidebar.active ul li a {
            padding: 20px 10px;
            text-align: center;
            font-size: 0.85em;
        }

        #sidebar.active ul li a i {
            margin-right:  0;
            display: block;
            font-size: 1.8em;
            margin-bottom: 5px;
        }

        #sidebar.active ul ul a {
            padding: 10px !important;
        }

        #sidebar.active a[aria-expanded="false"]::before, #sidebar.active a[aria-expanded="true"]::before {
            top: auto;
            bottom: 5px;
            right: 50%;
            -webkit-transform: translateX(50%);
            -ms-transform: translateX(50%);
            transform: translateX(50%);
        }

        #sidebar .sidebar-header {
            margin-top: -20px;
            padding: 20px;
            /*background: #6d7fcc;*/
            background: #00897B;
        }

        #sidebar .sidebar-header strong {
            display: none;
            font-size: 1.8em;
        }

        #sidebar ul.components {
            padding: 20px 0;
            /*border-bottom: 1px solid #47748b;*/
        }

        #sidebar ul li a {
            padding: 10px;
            font-size: 1.1em;
            display: block;
        }
        #sidebar ul li a:hover {
            /*color: #7386D5;*/
            color: #00897B;
            background: #fff;
        }
        #sidebar ul li a i {
            margin-right: 10px;
        }

        #sidebar ul li.active > a, a[aria-expanded="true"] {
            color: #fff;
            /*background: #6d7fcc;*/
            background: #00897B; 

        }


        a[data-toggle="collapse"] {
            position: relative;
        }

        a[aria-expanded="false"]::before, a[aria-expanded="true"]::before {
            content: '\e259';
            display: block;
            position: absolute;
            right: 20px;
            font-family: 'Glyphicons Halflings';
            font-size: 0.6em;
        }
        a[aria-expanded="true"]::before {
            content: '\e260';
        }


        ul ul a {
            font-size: 0.9em !important;
            padding-left: 30px !important;
            /*background: #6d7fcc;*/
            background: #00897B; 
        }

        ul.CTAs {
            padding: 20px;
        }

        ul.CTAs a {
            text-align: center;
            font-size: 0.9em !important;
            display: block;
            border-radius: 5px;
            margin-bottom: 5px;
        }

        a.download {
            background: #fff;
            color: #7386D5;
        }

        a.article, a.article:hover {
            background: #6d7fcc !important;
            color: #fff !important;
        }

             /* ---------------------------------------------------
            CONTENT STYLE
        ----------------------------------------------------- */
        #content {
            padding: 20px;
            min-height: 100vh;
            transition: all 0.3s;
        }


                 /* ---------------------------------------------------
            MEDIAQUERIES
        ----------------------------------------------------- */
        @media (max-width: 768px) {
            #sidebar {
                min-width: 80px;
                max-width: 80px;
                text-align: center;
                margin-left: -80px !important ;
            }
            a[aria-expanded="false"]::before, a[aria-expanded="true"]::before {
                top: auto;
                bottom: 5px;
                right: 50%;
                -webkit-transform: translateX(50%);
                -ms-transform: translateX(50%);
                transform: translateX(50%);
            }
            #sidebar.active {
                margin-left: 0 !important;
            }

            #sidebar .sidebar-header h3, #sidebar .CTAs {
                display: none;
            }

            #sidebar .sidebar-header strong {
                display: block;
            }

            #sidebar ul li a {
                padding: 20px 10px;
            }

            #sidebar ul li a span {
                font-size: 0.85em;
            }
            #sidebar ul li a i {
                margin-right:  0;
                display: block;
            }

            #sidebar ul ul a {
                padding: 10px !important;
            }

            #sidebar ul li a i {
                font-size: 1.3em;
            }
            #sidebar {
                margin-left: 0;
            }
            #sidebarCollapse span {
                display: none;
            }
        }
     </style>   
    	


    </head>
    <body>

        
        <!-- my navigation -->
    <nav class="navbar navbar-light" style="background-color: #009688;">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php"><img src="SERVER/pictures/icon/complain.png" id="indexLogo-complain-box"></a>
            </div>
        
            <ul class="nav navbar-nav">             
                <li><a href="#complainBoxDev" class="nev-custom-css">Complain Box</a></li>
                <li><a href="#description-div-custom" class="nev-custom-css" id="ourAppAnc">Our App</a></li>
                <li><a href="#purpose-container" class="nev-custom-css">Purpose</a></li>
                <li><a href="#developers-container" class="nev-custom-css">Supervisor & Developers</a></li>
            </ul>


            <?php
                        include 'includesAdminPanel/adminLogout.php';
            ?>
            <!--
            <ul class="nav navbar-nav navbar-right">
                <li><a href="includesAdminPanel/logout.php" class="nev-custom-css"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
            </ul> -->
      </div>
    </nav><!-- end of nevigation -->



    <div class="wrapper">
            <!-- Sidebar Holder -->
            <nav id="sidebar">
                <div class="sidebar-header">
                    <h3>Complain Box</h3>
                    <strong>CB</strong>
                </div>

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
                        
                    </li>
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


                    <li>
                        <a href="logout.php">
                            <i class="glyphicon glyphicon-log-out"></i>
                            Log out
                        </a>
                    </li>


                </ul>


                <!--
                <ul class="list-unstyled CTAs">
                    <li><a href="https://bootstrapious.com/tutorial/files/sidebar.zip" class="download">Download source</a></li>
                    <li><a href="https://bootstrapious.com/p/bootstrap-sidebar" class="article">Back to article</a></li>
                </ul> -->
            </nav>

            <!-- Page Content Holder -->
            <div id="content">

                <nav class="navbar navbar-default">
                    <div class="container-fluid">

                        <div class="navbar-header">
                            <button type="button" id="sidebarCollapse" class="btn btn-info navbar-btn" style="background-color: #009688;">
                                <i class="glyphicon glyphicon-align-left"></i>
                                <!--<span>Toggle Sidebar</span>-->
                            </button>
                            
                        </div>

                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            
                            <!--<h2 class="nav navbar-nav navbar-right center">Home</h2>--> 
                            <ul class="nav navbar-nav navbar-right">

                                <li><h2>Home</h2></li>
                                <!--<li><a href="#">Page</a></li>
                                <li><a href="#">Page</a></li>
                                <li><a href="#">Page</a></li>
                                <li><a href="#">Page</a></li>-->
                            </ul>
                        </div>
                    </div>
                </nav>

                <h2>Collapsible Sidebar Using Bootstrap 3</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

                <div class="line"></div>

                <h2>Lorem Ipsum Dolor</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

                <div class="line"></div>

                <h2>Lorem Ipsum Dolor</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

                <div class="line"></div>

                <h3>Lorem Ipsum Dolor</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
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
