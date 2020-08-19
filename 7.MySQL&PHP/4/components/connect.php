<?php
$servername="localhost";
$username="root";
$password="";
$dbname="product";

try{
    $conn = new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "It's OK!";
}
catch(PDOException $e){
    echo "Failed-".$e->getMessages();
}
$conn =null;
?>