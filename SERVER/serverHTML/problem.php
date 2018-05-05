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
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <input type="text" name="search" class="form-control" placeholder="" >
                                    <br>
                                    <button type="submit" name="submit" class="btn btn-primary" style="background-color: #009688;">search</button>
                                </div>
                            </div>

                            <div class="col-md-2">
                                <select name="category"  class="form-control">
                                    <option value="">All Category</option>
                                    <option value="Road Damage">Road Damage</option>
                                    <option value="Garbage">Garbage</option>
                                    <option value="Footpath">Footpath</option>
                                    <option value="Drainage">Drainage</option>
                                    <option value="Road Light">Road Light</option>
                                    <option value="Mosquito">Mosquito</option>
                                    <option value="Illegal Parking">Illegal Parking</option>
                                    <option value="Curruption">Curruption</option>
                                    <option value="Repair">Repair</option>
                                    <option value="Others">Others</option>
                                </select>
                                
                            
                            </div>

                            <div class="col-md-2">
                                <select name="status"  class="form-control">
                                    <option value="">All Status</option>
                                    <option value="solved">Solved</option>
                                    <option value="in progress">In Progress</option>
                                    <option value="in consideration">In Consideration</option>
                                </select>
                            </div>

                            <div class="col-md-2">
                                <select name="priority"  class="form-control">
                                    <option value="">Priority</option>
                                    <option value="0">Priority 0</option>
                                    <option value="1">Priority 1</option>
                                    <option value="2">Priority 2</option>
                                    <option value="3">Priority 3</option>
                                    <option value="4">Priority 4</option>
                                    <option value="5">Priority 5</option>
                                    <option value="6">Priority 6</option>
                                    <option value="7">Priority 7</option>
                                    <option value="8">Priority 8</option>
                                    <option value="9">Priority 9</option>
                                    <option value="10">Priority 10</option>
                                </select>
                            </div>



                            <div class="col-md-3">
                                <select name="wardNo"  class="form-control">
                                    <option value="">Ward No.</option>
                                    <option value="1">Ward No. 1</option>
                                    <option value="2">Ward No. 2</option>
                                    <option value="3">Ward No. 3</option>
                                    <option value="4">Ward No. 4</option>
                                    <option value="5">Ward No. 5</option>
                                    <option value="6">Ward No. 6</option>
                                    <option value="7">Ward No. 7</option>
                                    <option value="8">Ward No. 8</option>
                                    <option value="9">Ward No. 9</option>
                                    <option value="10">Ward No. 10</option>
                                    <option value="11">Ward No. 11</option>
                                    <option value="12">Ward No. 12</option>
                                    <option value="13">Ward No. 13</option>
                                    <option value="14">Ward No. 14</option>
                                    <option value="15">Ward No. 15</option>
                                    <option value="16">Ward No. 16</option>
                                    <option value="17">Ward No. 17</option>
                                    <option value="18">Ward No. 18</option>
                                    <option value="19">Ward No. 19</option>
                                    <option value="20">Ward No. 20</option>
                                    <option value="21">Ward No. 21</option>
                                    <option value="22">Ward No. 22</option>
                                    <option value="23">Ward No. 23</option>
                                    <option value="24">Ward No. 24</option>
                                    <option value="25">Ward No. 25</option>
                                    <option value="26">Ward No. 26</option>
                                    <option value="27">Ward No. 27</option>
                                    <option value="28">Ward No. 28</option>
                                    <option value="29">Ward No. 29</option>
                                    <option value="30">Ward No. 30</option>
                                    <option value="31">Ward No. 31</option>
                                    <option value="32">Ward No. 32</option>
                                    <option value="33">Ward No. 33</option>
                                    <option value="34">Ward No. 34</option>
                                    <option value="35">Ward No. 35</option>
                                    <option value="36">Ward No. 36</option>
                                    <option value="37">Ward No. 37</option>
                                    <option value="38">Ward No. 38</option>
                                    <option value="39">Ward No. 39</option>
                                    <option value="40">Ward No. 40</option>
                                    <option value="41">Ward No. 41</option>
                                    <option value="42">Ward No. 42</option>
                                    <option value="43">Ward No. 43</option>
                                    <option value="44">Ward No. 44</option>
                                    <option value="45">Ward No. 45</option>
                                    <option value="46">Ward No. 46</option>
                                    <option value="47">Ward No. 47</option>
                                    <option value="48">Ward No. 48</option>
                                    <option value="49">Ward No. 49</option>
                                    <option value="50">Ward No. 50</option>
                                    <option value="51">Ward No. 51</option>
                                    <option value="52">Ward No. 52</option>
                                    <option value="53">Ward No. 53</option>
                                    <option value="54">Ward No. 54</option>
                                    <option value="55">Ward No. 55</option>
                                    
                                    
                                </select>
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
                    $test = "";

                    $sql = "SELECT * FROM problem WHERE (visibility = 1)";

                    $output = '';

                    if(isset($_POST['search']) && $_POST['search'] != "") {
                        $test = "onceDone";
                        $searchq = $_POST['search'];
                        $sql .= " AND (problemID = '$searchq')";
                    } 

                    if(isset($_POST['category']) && $_POST['category'] != "") {
                        $searchItem = $_POST['category'];
                        $sql .= " AND (category = '$searchItem')";
                    }

                    if(isset($_POST['status']) && $_POST['status'] != "") {
                        $searchItem = $_POST['status'];
                        $sql .= " AND (status = '$searchItem')";
                    }

                    if(isset($_POST['priority']) && $_POST['priority'] != "") {
                        $searchItem = $_POST['priority'];
                        $sql .= " AND (priority = '$searchItem')";
                    }

                    if(isset($_POST['wardNo']) && $_POST['wardNo'] != "") {
                        $searchItem = $_POST['wardNo'];
                        $sql .= " AND (wardNo = '$searchItem')";
                    }

                    //echo $sql;
                    
                    $result=mysqli_query($db, $sql);

                    while($row = mysqli_fetch_array($result, MYSQLI_NUM)) {

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




                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-md-8">

                                            <p style="color: black;"><b>Problem ID: </b>'.$problem_id.'</p>
                                            <p style="color: black;"><b>Problem Category: </b>'.$category.'</p>
                                            <p style="color: black;"><b>Statu: </b>'.$status.'</p>
                                            <p style="color: black;"><b>Priority: </b>'.$prio.'</p>
                                            <br>
                                            <p style="color: black; text-align: justify;">'.$decription.'</p>


                                            <a href="updateProblem.php?id='.$problem_id.'">
                                                <button type="button" class="btn btn-primary btn-sm" style="background-color: #2E7D32;">update</button>
                                            </a>

                                            <a href="viewProblem.php?id='.$problem_id.'">
                                                <button type="button" class="btn btn-primary btn-sm" style="background-color: #00838F;">view</button>
                                            </a>

                                            <a href="hideProblem.php?id='.$problem_id.'">
                                                <button type="button" class="btn btn-primary btn-sm" style="background-color: #D32F2F;">hide</button>
                                            </a>
                                        </div>
                                        <div class="col-md-4">
                                            
                                            <img style="height: 100%; width: 100%;" src="../problemPicture/'.$problem_file_name.'" alt="Girl in a jacket">
                                        </div>
                                    </div>
                                </div>
                                <hr>
                            ';

                        }
            
                    echo($output);
                    mysqli_close($db);

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