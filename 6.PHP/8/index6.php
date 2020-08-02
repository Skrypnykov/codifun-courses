<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Script 8/7</title>
</head>
<body>
    <?php
        $var1=77;
        $var2="";
        echo (isset($var1))?"Было задано значение":"Не было задано никакого значения";
        echo"<br/>";
        echo (isset($var2))?"Было задано значение":"Не было задано никакого значения";
        echo"<br/>";
        echo (empty($var1))?"Не имеет никакого значения":"Имеет значение";
        echo"<br/>";
        echo (empty($var2))?"Не имеет никакого значения":"Имеет значение";
    ?>  
</body>
</html>