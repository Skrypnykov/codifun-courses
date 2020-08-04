<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Script 11/2</title>
</head>
<body>
    <?php
        function infoLength($textLen=""){
            echo "Текст имеет ".mb_strlen($textLen)." символов";
        }
        infoLength();
    ?>  
</body>
</html>