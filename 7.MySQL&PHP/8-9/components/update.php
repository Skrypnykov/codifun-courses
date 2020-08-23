<?php
require "connect.php";
try{
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $sql_update="UPDATE suppliers SET email='sapfyr_od@gmail.com' WHERE idSupp=2;";
    $update=$conn->prepare($sql_update);
    $update->execute();
    echo $update->rowCount()." records UPDATED!";
}
catch(PDOException $e){
    echo $sql_update."<br/>".$e->getMessage();
}
$conn =null;
?>