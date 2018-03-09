<?php
    require "../pdo/Database.php";
    require "../pdo/Validation.php";
    require "../pdo/Developer.php";
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
        $form[1] = $_POST['name'];
        $form[2] = $_POST['position'];
        $form[3] = $_POST['facebook'];
        $form[4] = $_POST['twitter'];
        $form[5] = $_POST['gmail'];
        $form[6] = $_POST['description'];
        $form[7] = $src;
        
        $db = new Database();
        $dbh = $db->getConnection();
        
//        print_r($data);
        $dev = new Developer($dbh);
        $returnVal = $dev->create($form);
        
        if($returnVal){
            Header("Location:" . $_SERVER['HTTP_REFERER']. "?form=success");
        }
        else {
            Header("Location:" . $_SERVER['HTTP_REFERER']. "?form=fail");
        }
        
        
        
        
    }
