<?php

class User{
 
    // database connection and table name
    private $conn;
    private $table_name = "users";
  
    public function __construct($db){
        $this->conn = $db;
    }
	
	// User Login Validation
	// Params: 
	//	@username: username or email
	//	@password: using base 128 encoding
	// Return: true or false 
	
	public function login($username,$password){
 
		//count the rows
		$query = "SELECT id, user_name, name
				FROM " . $this->table_name ." 
				WHERE user_name = '".$username."' 
				  AND password = SHA1('".$password."')";

		$stmt = $this->conn->prepare( $query );
		$stmt->execute();
		
		return $stmt;
	}
}
?>