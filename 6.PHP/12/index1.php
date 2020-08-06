<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Script 12/2</title>
</head>
<body>
    <?php
       $x=7; // область применения переменной x глобальная
       function power(){
           global $x;
           return $x*$x;
       }
       echo "Переменная X является глобальной и имеет значение: $x"; 
       echo "<br/> Возвращаемое значение функции: ".power();
    ?>  
</body>
</html>