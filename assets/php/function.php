<?php
class Main {
    private $conn;

    public function __construct() {
        $this->connect(); // Automatically connect to the database when the object is created
    }

    private function connect() {
        include_once("../../connect/connect.php");
        $this->conn = $conn;
    }

    public function admin_log($user_name, $user_pass) {        
        $user_name = $this->conn->real_escape_string($user_name);
        $user_pass = $this->conn->real_escape_string($user_pass);        
        $sql = "SELECT * FROM admin WHERE email='$user_name' AND password='$user_pass'";
        $result = $this->conn->query($sql);        
        if ($result && $result->num_rows > 0) {           
            
            return true; 
        } else {
            return false; 
        }
    }
}