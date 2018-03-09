<?php

class gallery{
    
    private $dbh;
    private $tbl_name = "tbl_gallery_001";
    

    public function __construct(PDO $dbh){
        $this->dbh = $dbh;
    }
    
    public function toSql_values($arr){
        $returnVal = "";
        foreach($arr as $data){
            if(strcmp($returnVal,"") == 0){
                $returnVal = "'".$data."'";
            }
            else {
                $returnVal .= ",'".$data. "'";
            }
            
        }
        
        return $returnVal;
    }
    
    public function getDetails(){
        $sql = "SELECT * FROM " . $this->tbl_name;
        $query = $this->dbh->prepare($sql);
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
    
    public function getCount(){
        $sql = "SELECT * FROM " . $this->tbl_name;
        $query = $this->dbh->prepare($sql);
        $query->execute();
        return $query->rowCount();
    }
    
    public function create($arr){
        $sql = "INSERT INTO " . $this->tbl_name . " VALUES (" . $this->toSql_values($arr) . ")";
        echo $sql;
        $query = $this->dbh->prepare($sql);
        $query->execute();
        return $query->rowCount() ? $this->dbh->lastInsertId() : false;
    }
    
    public function remove($id){
        $sql = "DELETE FROM ". $this->tbl_name . " WHERE gallery_id=$id";
        $query = $this->dbh->prepare($sql);
        $query->execute();
        
        return $query->rowCount() ? true : false ;
    }
    
    public function update($arr){
        $sql = "UPDATE " . $this->tbl_name . " src='". $arr[1] . "', title='" . $arr[2] . " WHERE gallery_id='" . $arr[0]; 
        $query = $this->dbh->prepare($sql);
        $query->execute();
        
        return $query->rowCount() ? true : false;
    }
    
}