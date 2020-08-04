<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Script 11/3</title>
</head>
<body>
    <?php
        $text = "Ура, пишем свою функцию в PHP!";
        $altText = "В этом случае мы видим, как используюстя аргументы функции";
        function infoLength($textLen=""){
            return mb_strlen($textLen);
        }
        echo "Текст имеет ".infoLength($text)." символов";
    ?>  
</body>
</html>