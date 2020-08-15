<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Script 19/2</title>
    <style>
        input{
            margin:10px 0;
        }
    </style>
</head>
<body>
    <?php
        echo $_SERVER["REQUEST_URI"];
    ?>
    <div class="container">
        <h1>Данные для передачи на СЕРВЕР</h1>
        <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
            <input type="text" name="name" placeholder="Ваше имя" /><br/>
            <input type="email" name="email" placeholder="Адрес электронной почты" /><br/>
            <input type="submit" name="start" value="Отправить" />
        </form>
    </div>
</body>
</html>