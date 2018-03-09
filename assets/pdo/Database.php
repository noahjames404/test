<?php

class Database {
    
    public $conn;
    
    public function getConnection(){
        $this->conn = null;
        $localhost = "localhost";
        $db_name = "db_ugames";
        $username = "root";
        $password = "";
        
        try {
            $this->conn = new PDO("mysql:host=".$localhost.";dbname=".$db_name,$username,$password);
//            $this->conn = new PDO("mysql:host=".$localhost.";dbname=".$db_name,$username,$password);
        }
        catch(PDOException $e){
            echo "Error: ". $e->getMessage();
        }
   
        return $this->conn;
    }
}