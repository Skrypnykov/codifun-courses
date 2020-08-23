<?php
$name=$address=$email=$phone="";
if(isset($_POST['name'])) $name=$_POST['name'];
if(isset($_POST['address'])) $address=$_POST['address'];
if(isset($_POST['email'])) $email=$_POST['email'];
if(isset($_POST['phone'])) $phone=$_POST['phone'];
try{
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $sql_update="UPDATE suppliers SET nameSupp='$name',addressSupp='$address',email='$email',phone='$phone' WHERE idSupp=".$idSupp.";";
    $update=$conn->prepare($sql_update);
    $update->execute();
    echo "Records UPDATED!";
}
catch(PDOException $e){
    echo $sql_update."<br/>".$e->getMessage();
}
//$conn=null;
?>