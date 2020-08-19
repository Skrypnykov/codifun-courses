<?php
require "connect.php";
try{
    $conn = new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $sql_del="DELETE FROM products WHERE idProduct=14;";
    $conn->exec($sql_del);
    echo "Record deleted!";
}
catch(PDOException $e){
    echo $sql_del."<br/>".$e->getMessage();
}
$conn =null;
?>