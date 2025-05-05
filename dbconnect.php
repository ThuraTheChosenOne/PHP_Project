<?php
//connect database

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "thura1575_69";
$dbname = "computer_science";

try{
    $conn = new PDO ("mysql:host=$dbhost;dbname=$dbname",$dbuser,$dbpass);
    // echo "Database Connected Successfully";
}catch(PDOException $e){
    echo "Error Found : ".$e->getMessage();
}
?>