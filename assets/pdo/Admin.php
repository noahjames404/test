<?php

class Admin {
    
    private $tbl_name = "tbl_dashboard_001";    
    private $dbh;
    
    public function __construct(PDO $dbh){
        $this->dbh = &$dbh;
//        echo "going";
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
    
    public function update_visitors(){
        
        $sql = "UPDATE " . $this->tbl_name . " SET visitors = visitors + 1 ";
        $query = $this->dbh->prepare($sql);
        $query->execute();
//        return $query->fetchAll(PDO::FETCH_ASSOC);
        return $query->rowCount() ? true : false;
    }
        
    public function update_downloads(){
        
        $sql = "UPDATE " . $this->tbl_name . " SET downloads = downloads + 1 ";
        $query = $this->dbh->prepare($sql);
        $query->execute();
//        return $query->fetchAll(PDO::FETCH_ASSOC);
        return $query->rowCount() ? true : false;
    }
        
    public function show_details(){
        
        $sql = "SELECT * FROM " . $this->tbl_name . " ";
//        echo $sql;
        $query = $this->dbh->prepare($sql);
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
        

    
    
    
   
}