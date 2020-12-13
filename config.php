<?php 
$dbHost = "mysql:host=localhost;";
$dbName = "dbname=formulaire";
$dbUsers = "root";
$dbPassword = "";

try{
    $db = new PDO($dbHost.$dbName,$dbUsers,$dbPassword);
    $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}catch(PDOException $ex){
    die("L'erreur suivante s'est produite :".$ex->getMessage());
}
?>
