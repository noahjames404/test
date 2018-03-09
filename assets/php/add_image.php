<?php
    require "../pdo/Database.php";
    require "../pdo/Validation.php";
    require "../pdo/Gallery.php";
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $form = array();

        $path = $_FILES['picture']['name'];
        $ext = pathinfo($path,PATHINFO_EXTENSION);
		$picture = "gallery/" . rand() .  "_" . rand() .".$ext"; 
        $src = "assets/php/$picture";
        
        $validate = new Validation();
        $returnVal = $validate->isImg($ext);
        if(!$returnVal){
            Header("Location:" . $_SERVER['HTTP_REFERER']. "?form=notImage");
            return;
        }
            
        if(!copy($_FILES['picture']['tmp_name'], $picture)){
            print("
                You have to change your <b>php.ini<b><br>
                post_max_size = 200M<br>
                upload_max_filesize=100M<br>
                restart xampp/wamp
            ");
		  return;
        }

        
        $form[0] = "NULL";
        $form[1] = $src;
        $form[2] = $_POST['title'];
        
        $db = new Database();
        $dbh = $db->getConnection();
        
//        print_r($data);
        $gallery = new Gallery($dbh);
        $returnVal = $gallery->create($form);
        
        if($returnVal){
            Header("Location:" . $_SERVER['HTTP_REFERER']. "?form=success");
        }
        else {
            Header("Location:" . $_SERVER['HTTP_REFERER']. "?form=fail");
        }
        
        
        
        
    }
