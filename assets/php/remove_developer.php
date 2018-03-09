<?php

require "../pdo/Database.php";
require "../pdo/Developer.php";

if(empty($_GET['developer_id'])){
    header("Location:" .  $_SERVER['HTTP_REFERER'] . "?form=fail");
    return;
}

$db = new Database();
$dbh = $db->getConnection();

$dev = new Developer($dbh);
$returnVal = $dev->remove($_GET['developer_id']);
if($returnVal){
    header("Location:" .  $_SERVER['HTTP_REFERER'] . "?form=success");
}
else {
    header("Location:" .  $_SERVER['HTTP_REFERER'] . "?form=success");
}