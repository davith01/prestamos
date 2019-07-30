<?php
// required headers
/*****************************/
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
/*****************************/

// include database and object files
include_once '../database/config.php';
include_once '../database/client.php';

// instantiate database and connection
$database = new Database();
$db = $database->getConnection();

// initialize object
$client = new Client($db);
 
// query cateogies
$stmt = $client->read();
$num = $stmt->rowCount();
 
// check if more than 0 record found
if($num>0){
 
    $list = array();
    
    // retrieve our table contents
    // fetch() is faster than fetchAll()
    // http://stackoverflow.com/questions/2770630/pdofetchall-vs-pdofetch-in-a-loop
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        // extract row
        // this will make $row['name'] to
        // just $name only
        extract($row);
 
        $client = array(
            "id" => $id,
            "name" => $name,
            "lastName" => html_entity_decode($last_name),
			"birthday" => $birthday
        );
 
        array_push($list, $client);
    }
 
    // set response code - 200 OK
    http_response_code(200);
 
    // show categories data in json format
    echo json_encode($list);
}
 
else{
 
    // set response code - 404 Not found
    http_response_code(404);
 
    // tell the user no categories found
    echo json_encode(
        array("message" => "No client found.")
    );
}
?>
