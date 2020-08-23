<?php
$err=0;
$name=$address=$email=$phone="";
if(!empty($_POST['name'])){
    $name=$_POST['name'];
}else{$err++;}
if(!empty($_POST['address'])){
    $address=$_POST['address'];
}else{$err++;}
if(!empty($_POST['email'])){
    $email=$_POST['email'];
}else{$err++;}
if(!empty($_POST['phone'])){
    $phone=$_POST['phone'];
}else{$err++;}
if($err==0){    
try{
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $sqlQuer="INSERT INTO suppliers(nameSupp,addressSupp,email,phone)VALUES('$name','$address','$email','$phone');";
    $conn->exec($sqlQuer);
    echo "Successfully insert data!";
}
catch(PDOException $e){
    echo $sqlQuer."<br/>".$e->getMessage();
    }
}else{
    echo"Input all data!";
}
$conn =null;
?>