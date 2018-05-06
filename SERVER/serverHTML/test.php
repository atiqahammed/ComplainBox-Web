
          
          <?php  
          define('DB_SERVER', 'localhost');
                    define('DB_USERNAME', 'root');
                    define('DB_PASSWORD', '');
                    define('DB_DATABASE', 'testdb');
                    $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

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


                    echo $categoryAndSolved["Road Damage"].'<br>';
                    echo $categoryAndSolved["Garbage"].'<br>';
                    echo $categoryAndSolved["Footpath"].'<br>';
                    echo $categoryAndSolved["Drainage"].'<br>';
                    echo $categoryAndSolved["Road Light"].'<br>';
                    echo $categoryAndSolved["Mosquito"].'<br>';
                    echo $categoryAndSolved["Illegal Parking"].'<br>';
                    echo $categoryAndSolved["Curruption"].'<br>';
                    echo $categoryAndSolved["Repair"].'<br>';
                    echo $categoryAndSolved["Others"].'<br>';

                    echo "-------------------------------------<br>";


                    echo $categoryAndProgress["Road Damage"].'<br>';
                    echo $categoryAndProgress["Garbage"].'<br>';
                    echo $categoryAndProgress["Footpath"].'<br>';
                    echo $categoryAndProgress["Drainage"].'<br>';
                    echo $categoryAndProgress["Road Light"].'<br>';
                    echo $categoryAndProgress["Mosquito"].'<br>';
                    echo $categoryAndProgress["Illegal Parking"].'<br>';
                    echo $categoryAndProgress["Curruption"].'<br>';
                    echo $categoryAndProgress["Repair"].'<br>';
                    echo $categoryAndProgress["Others"].'<br>';

                    echo "-------------------------------------<br>";

                    echo $categoryAndCons["Road Damage"].'<br>';
                    echo $categoryAndCons["Garbage"].'<br>';
                    echo $categoryAndCons["Footpath"].'<br>';
                    echo $categoryAndCons["Drainage"].'<br>';
                    echo $categoryAndCons["Road Light"].'<br>';
                    echo $categoryAndCons["Mosquito"].'<br>';
                    echo $categoryAndCons["Illegal Parking"].'<br>';
                    echo $categoryAndCons["Curruption"].'<br>';
                    echo $categoryAndCons["Repair"].'<br>';
                    echo $categoryAndCons["Others"].'<br>';

                    echo "-------------------------------------<br>";



          ?>
        