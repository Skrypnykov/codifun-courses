<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Script 16/1</title>
    <style>
        input{
            margin:10px 0;
        }
    </style>
</head>
<body>
    <h1>Данные для передачи на СЕРВЕР</h1>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <input type="text" name="name" placeholder="Ваше имя"/><br/>
        <input type="email" name="email" placeholder="Ваш адрес электронной почты"/><br/>
        <input type="submit" value="Отправить данные"/>
    </form>
    <?php
        function filter($data){
            $data=trim($data);
            $data=htmlspecialchars($data);
            $dat=stripcslashes($data);
          return $data;
        }
        $name=$email="";
        $err_name=$err_mail=$message="";
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            if(!empty($_REQUEST['name'])){
                $name=$_REQUEST['name'];
            }else{
                $err_name="Input name!";
            }
            if(!empty($_REQUEST['email'])){
                $email=filter($_REQUEST['email']);
                if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                    $err_mail="Insert valid mail!";
                }
            }else{
                $err_mail="Input email!";
            }
            if($err_name.$err_mail=""){
                $message="Your name is: ".$name." and your email is: ".$email;
            }else{
                $message="Input all data!";
            }
        }
    ?>  
</body>
</html>