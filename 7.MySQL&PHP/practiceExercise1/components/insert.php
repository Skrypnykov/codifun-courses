<?php
$name=$email=$comment=$data="";
$err=0;
function clean($data){
    $data=trim($data);
    $data=stripslashes($data);
    $data=htmlspecialchars($data);
return($data);
}

if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(empty($_POST['name'])){
        $err++;
    }else{
        $name=$_POST['name'];
        if(!preg_match("/^[A-Z][a-z]{1,14}$/",$name)){
            $err++;
        }
    }
    if(empty($_POST['email'])){
        $err++;
    }else{
        $email=$_POST['email'];
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $err++;
        }
    }
    if(empty($_POST['comment'])){
        $err++;
    }else{
        $comment=clean($_POST['comment']);
        if(!preg_match("/^[-a-zA-Z0-9 \.\,\?\!]{1,1000}$/",$comment)){
            $err++;
        }
    }
    if($err==0){
        require "connect.php";
        //require "components/connect.php";
        $data=date("y-m-d h:i:s");   
try{
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $sqlQuer="INSERT INTO guest(name,email,comment,date_time)VALUES('$name','$email','$comment','$data');";
    $conn->exec($sqlQuer);
    echo "Successfully insert data!";
}
catch(PDOException $e){
    echo $sqlQuer."<br/>".$e->getMessage();
    }
    $conn=null;
}else{
    echo"Save unsuccessful! Fill in all the fields correctly!";
}
}
$prenume=$email=$comment=$data="";
?>