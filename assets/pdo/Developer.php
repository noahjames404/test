<?php
class Developer {
    
    private $tbl_name = "tbl_developers_001";    
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
    
    public function getDetails($id = ""){
        $clause = "";
        if(strcmp($id,"") != 0){
            $clause = "WHERE developer_id=$id";
        }
        
        $sql = "SELECT * FROM " . $this->tbl_name . " $clause";
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
      
        
        $query = $this->dbh->prepare($sql);
        $query->execute();
        return $query->rowCount() ? $this->dbh->lastInsertId() : false;
    }
    
    public function remove($id){
        $sql = "DELETE FROM " . $this->tbl_name . " WHERE developer_id=" . $id;
        
        $query = $this->dbh->prepare($sql);
        $query->execute();
        return $query->rowCount() ? true : false;
    }
    
    public function update($arr){
        $sql = "UPDATE " . $this->tbl_name . " SET name='" . $arr[1] . "', position='" . $arr[2] . "', facebook='" . $arr[3] . "',twitter='" . $arr[4] . "',gmail='" . $arr[5] . "',description='" . $arr[6] . "',src='" . $arr[7] . "' WHERE developer_id='" . $arr[0] . "'";
//        echo $sql;
        $query = $this->dbh->prepare($sql);
        $query->execute();
        return $query->rowCount() ? true : false;
    }
}