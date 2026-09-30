<?php
$host ="";
$username="";
$password="";
$db="";
$dsn="mysql:host=$host;dbname=$db;charset=utf8";

try{
    $pdo = new PDO($dsn,$username,$password);
}catch(PDOException $e){
    echo $e->getMessage();
    return false;
}

require_once "controller.php";
require_once "user.php";

$controller = new controller($pdo);
$user = new user($pdo);
?>
