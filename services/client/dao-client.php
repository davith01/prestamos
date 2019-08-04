<?php

class Client{
 
    // database connection and table name
    private $conn;
    private $table_name = "clients";
 
    public function __construct($db){
        $this->conn = $db;
    }
	
	// select used in client list page
	public function read(){
 
		//select all data
		$query = "SELECT id, name, last_name, floor(datediff(curdate(),birth_date) / 365.25) as age
				    FROM " . $this->table_name . "
				   WHERE status = 1	
				  ORDER BY name";
	 
		$stmt = $this->conn->prepare( $query );
		$stmt->execute();

		return $stmt;
	}
	
	// select used in client view panel 
	public function read_one($id){
		//select one
		$query = "SELECT id, name, last_name, floor(datediff(curdate(),birth_date) / 365.25) as age,
					genere, IFNULL(image,IFNULL(IF(genere=2,'resources/images/female.jpg','resources/images/male.jpg'),'resources/images/foto_default.jpg')) as image,
					123.130 balance, 123123.0 capital, 123123.0 interest, 123123.0 overdue_months,
					IF(genere=2,'Oficina','Cliente') as type
				    FROM " . $this->table_name . "
				   WHERE status = 1	
				     AND id = ".$id."
				  ORDER BY name";
	 
		$stmt = $this->conn->prepare( $query );
		$stmt->execute();

		return $stmt;
	}
}
?>