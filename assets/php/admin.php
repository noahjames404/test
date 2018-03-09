<?php
require "../pdo/Database.php";
require "../pdo/Admin.php";
require "../pdo/Developer.php";
require "../pdo/Gallery.php";
session_start();
if($_SERVER['REQUEST_METHOD'] == "POST"){
    if(isset($_POST['update_visitor'])){
        if(empty($_SESSION['visited'])){
            $db = new Database();
            $dbh = $db->getConnection();
            
            $dashboard = new Admin($dbh);
            $returnVal = $dashboard->update_visitors();
            if($returnVal){
                echo "visit recorded";
                $_SESSION['visited'] = true;
            }
            else {
                echo "not recorded";
            }
        }
    }
    if(isset($_POST['show_visitor'])){

            $db = new Database();
            $dbh = $db->getConnection();
            
            $dashboard = new Admin($dbh);
            $returnVal = $dashboard->show_details();

            foreach($returnVal as $row => $key){
                echo $key['visitors'];
                
            }

    }
    if(isset($_POST['show_download'])){

            $db = new Database();
            $dbh = $db->getConnection();
            
            $dashboard = new Admin($dbh);
            $returnVal = $dashboard->show_details();

            foreach($returnVal as $row => $key){
                echo $key['downloads'];
                
            }

    }
    if(isset($_POST['show_gallery'])){

            $db = new Database();
            $dbh = $db->getConnection();
            
            $dashboard = new Gallery($dbh);
            $returnVal = $dashboard->getCount();

            echo $returnVal;

    }
    if(isset($_POST['show_developers'])){

            $db = new Database();
            $dbh = $db->getConnection();
            
            $dashboard = new Developer($dbh);
            $returnVal = $dashboard->getCount();

            echo $returnVal;

    }
}
else {
    echo "
    <h1>ERROR 403</h1>
    <br>
    Your not suppose to be here :/";
}