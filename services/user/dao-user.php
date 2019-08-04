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
		$query = "SELECT id, username, name
				FROM " . $this->table_name ." 
				WHERE username = '".$username."' 
				  AND password = '".$password."'";
	
		$stmt = $this->conn->prepare( $query );
		$stmt->execute();
		
		return $stmt;
	}
}
?>