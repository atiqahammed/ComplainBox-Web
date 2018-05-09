<?php
 
/*
 * Following code will list all the products
 */



// array for JSON response
$response = array();

	/*define('DB_SERVER', 'localhost');
   	define('DB_USERNAME', 'root');
   	define('DB_PASSWORD', '');
   	define('DB_DATABASE', 'testdb');
   	$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);



	$sql = "SELECT *FROM institution";
	$result = mysqli_query($db,$sql);*/



    //global $connect;
    $category = $_POST["category"];


$data = json_decode(file_get_contents('php://input'));
print_r($data);
echo $data["category"];
// include db connect class
//require_once __DIR__ . '/db_connect.php';

// connecting to db
//$db = new DB_CONNECT();
 
// get all products from products table
//$result = mysql_query("SELECT *FROM products") or die(mysql_error());
 
// check for empty result
if (mysqli_num_rows($result) > 0) {
    // looping through all results
    // products node
    $response["institutes"] = array();
 
    while ($row = mysqli_fetch_array($result)) {
        // temp user array
        $product = array();
        
        $product["institutionName"] = $row["institutionName"];
        $product["instituteLocation"] = $row["instituteLocation"];
        $product["latitude"] = $row["latitude"];
        $product["longitude"] = $row["longitude"];
        $product["phone"] = $row["phone"];
 
        // push single product into final response array
        array_push($response["institutes"], $product);
    }
    // success
    $response["success"] = 1;
 
    // echoing JSON response
    echo json_encode($response);
} else {
    // no products found
    $response["success"] = $data["category"];
    $response["message"] = "No products found";
 
    // echo no users JSON
    echo json_encode($response);
}
?>