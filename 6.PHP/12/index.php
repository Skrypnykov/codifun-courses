<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Script 12/1</title>
</head>
<body>
    <?php
       $x=7; // область применения переменной x
       function power($v){
           return $v*$v;
       }
       echo "Переменная X является глобальной и имеет значение: $x, а возвращаемое значение функции равно ";
       echo power($x);
    ?>  
</body>
</html>