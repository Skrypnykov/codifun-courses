<?php
require "connect.php";
try{
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $sql_del="DELETE FROM products WHERE idProduct=20;";
    $conn->exec($sql_del);
    echo "Record deleted!";
}
catch(PDOException $e){
    echo $sql_del."<br/>".$e->getMessage();
}
$conn =null;
?>