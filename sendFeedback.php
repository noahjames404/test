<?php
session_start();
if($_SERVER['REQUEST_METHOD'] == "POST"){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $title = $_POST['subject'];
    $content = $_POST['content'];
    
    if(isset($_SESSION["LIMIT"])){
        echo "limit";
        return;
    }
    else {
        $_SESSION["LIMIT"] = true;
        
    }
    
    
    $subject = "Ugames Feedback: $title";
    $message = "
    Name:$name\n\rEmail:$email\n\r$content   
    ";
    
    $emails = [
      "yanganoah404@gmail.com",
      "GarByteplays@gmail.com",
    ];
    
    foreach($emails as $data){
        @mail($data,$subject,$message);
    }
}
else {
  header("Location:index.php");
}


?>