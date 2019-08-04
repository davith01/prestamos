<?php
// required headers
/*****************************/
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
/*****************************/

// include database and object files
include_once '../config_bd.php';
include_once './dao-client.php';

// instantiate database and connection
$database = new Database();
$db = $database->getConnection();

// initialize object
$client = new Client($db);
 
// query attribute
$params = json_decode (file_get_contents('php://input'),true);
if(count($params)==0) {
 $params = $_POST;
}
$id = $params['id'];

// query read
$stmt = $client->read_one($id);
$num = $stmt->rowCount();
 
// check if more than 0 record found
if($num>0){
 
    if ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        extract($row);
        $client = array(
            "id" => $id,
            "name" => $name,
            "last_name" => $last_name,
			"age" => $age,
			"image" => $image,
			"genere" => $genere,
			"type" => $type,
			"balance" => $balance,
			"capital" => $capital,
			"interest" => $interest,
			"overdue_months" => $overdue_months
        );
	}
 
    // set response code - 200 OK
    http_response_code(200);
 
    // show categories data in json format
    echo json_encode(array("data" => $client));
}
 
else{
 
    // set response code - 404 Not found
    http_response_code(404);
 
    // no data found
    echo json_encode(
        array("message" => "No client found.")
    );
}
?>
