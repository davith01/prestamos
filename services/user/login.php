<?php
// required headers
/*****************************/
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
/*****************************/

// include database and object files
include_once '../config_bd.php';
include_once './dao-user.php';

// instantiate database and connection
$database = new Database();
$db = $database->getConnection();

// initialize object
$user = new User($db);
$username = '';
$password = '';

if(isset($_POST["nombre"])) {
	$username = $_POST["nombre"];
}
if(isset($_POST["password"])) {
	$password = $_POST["password"];
}
// query login 
$result = $user->login($username,$password);
 
// check if more than 0 record found
if($result){
 
    // set response code - 200 OK
    http_response_code(200);
    
	echo json_encode( 
	  array(
		"message" => "login success", 
		"status" => "success"
		)
	);
}
 
else{
 
    // set response code - 403 Unauthorized
    http_response_code(403);
 
    // response wrong
	echo json_encode( 
	  array(
		"message" => "User or password error.",
		"status" => "error"
		)
	);
}
?>
