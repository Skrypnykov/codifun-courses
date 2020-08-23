<?php
$servername="localhost";
$username="root";
$password="";
$dbname="product";

try{
    $conn = new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
}
catch(PDOException $e){
    echo "Failed-".$e->getMessages();
}
?>