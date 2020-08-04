<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Script 11/1</title>
</head>
<body>
    <?php
        function infoLength(){
            $text = "Ура, пишем свою функцию в PHP!";
            echo "Текст имеет ".mb_strlen($text)." символов";
        }
        infoLength();
    ?>  
</body>
</html>