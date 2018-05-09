<?php  
    define('DB_SERVER', 'localhost');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', '');
    define('DB_DATABASE', 'testdb');
    $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
    $output = '';

    if(isset($_POST['searchVal'])) {
        $searchq = $_POST['searchVal'];
        $searchq = preg_replace("#[^0-9a-z]#i", "", $searchq);
        $sql = "SELECT * FROM institution WHERE (institutionName LIKE '%$searchq%' OR instituteLocation LIKE '%$searchq%' OR category LIKE '%$searchq%') AND visibility = 1 ORDER BY institutionID DESC";

        $result=mysqli_query($db, $sql);

        while($row = mysqli_fetch_array($result, MYSQLI_NUM)) {

            $name = base64_decode($row[0]);
            $latitude = $row[1]; 
            $longitude = $row[2];
            $phone = $row[3];
            $category = $row[4];
            $id = $row[5];
            $location = base64_decode($row[8]);

            $output .= '
            
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12" style = "box-shadow: 0 8px 6px -6px black; background-color: #e6ecf7">

                            <h3 style="color: black;"><b>Institution name:</b> '.$name.'</h3>
                            
                            <p style="color: black;"><b>Category :</b> '.$category.'</p>
                            <p style="color: black;"><b>Address:</b> '.$location.'</p>
                            <p style="color: black;"><b>Phone Number:</b> '.$phone.'</p>

                            <a href="updateInstitute.php?id='.$id.'">
                                <button type="button" class="btn btn-primary btn-sm" style="background-color: #2E7D32; border-color: #2E7D32;">update</button>
                            </a>

                            <a href="viewInstitute.php?id='.$id.'">
                                <button type="button" class="btn btn-primary btn-sm" style="background-color: #00838F; border-color: #00838F;">view</button>
                            </a>

                            <a href="hideInstitute.php?id='.$id.'">
                                <button type="button" class="btn btn-primary btn-sm" style="background-color: #D32F2F; border-color: #D32F2F;">hide</button>
                            </a>
                            <p></p>

                        </div>   
                    </div>
                </div>  
                <hr>
            ';

        }
    } 
    
    mysqli_close($db);                                 
    echo($output);
?>