<?php

class Validation {

    
    private $extension = array("png","jpg","jpeg","gif");
    
    public function isImg($ext){
        foreach($this->extension as $e){
            if(strcmp($e,$ext) == 0){
                return true;
            }
        }
        return false;
    }
    
    
    
    
    
} //end of class