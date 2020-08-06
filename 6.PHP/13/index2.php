<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Script 13/3</title>
    <style>
        form{
            margin:20px 0;
        }
    </style>
</head>
<body>
    <h1>Данные для передачи на СЕРВЕР</h1>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="get">
        <input type="text" name="name" placeholder="Ваше имя"/><br/><br/>
        <input type="email" name="email" placeholder="Ваш адрес электронной почты"/><br/><br/>
        <textarea name="text" placeholder="Описание" cols="30" rows="10"></textarea><br/><br/>
        <input type="submit" value="Отправить данные"/>
    </form>
    <?php
       $name = "Anonymous";
       $email = "Not email";
       if($_SERVER["REQUEST_METHOD"]=="GET"){
           if(!empty($_REQUEST['name'])){
                $name=$_REQUEST['name'];
           }
           if(!empty($_REQUEST['email'])){
                $email=$_REQUEST['email'];
        }
        echo "Ваше имя: ".$name." и адрес электронной почты: ".$email ;
       }
    ?>  
</body>
</html>