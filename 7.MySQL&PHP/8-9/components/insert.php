<?php
$err=0;
$name=$cost=$quantity="";
if(!empty($_POST['name'])){
    $name=$_POST['name'];
}else{$err++;}
if(!empty($_POST['cost'])){
    $cost=$_POST['cost'];
}else{$err++;}
if(!empty($_POST['quantity'])){
    $quantity=$_POST['quantity'];
}else{$err++;}
if($err==0){    
try{
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $sqlQuer="INSERT INTO products(nameProduct,costProduct,quantity)VALUES('$name','$cost','$quantity');";
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