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
        $sql = "SELECT * FROM problem WHERE problemID LIKE '%$searchq%' OR category LIKE '%$searchq%' OR description LIKE '%$searchq%' OR latitude LIKE '%$searchq%' OR longitude LIKE '%$searchq%' OR wardNo Like '%$searchq%' OR priority LIKE '%$searchq%' OR status LIKE '%$searchq%' OR email LIKE '%$searchq%'";

        $result=mysqli_query($db, $sql);

        while($row = mysqli_fetch_array($result, MYSQLI_NUM)) {

           // echo $row[0].'<br>';
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

                <div>
                    
                    <p style="color: black;">Problem ID: '.$problem_id.'</p>
                    <p style="color: black;">Problem Category: '.$category.'</p>

                    
                    <p style="color: black;">Statu: '.$status.'</p>

                    
                    <p style="color: black;">Priority: '.$prio.'</p>
                    <br>

                    
                    <p style="color: black; text-align: justify;">'.$decription.'</p>

                </div>

                <hr>
            ';

        }



    } 

    else {




    }

                    //print("$output");

                    
echo($output);


?>