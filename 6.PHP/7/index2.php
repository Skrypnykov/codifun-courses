<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Script 7/3</title>
</head>
<body>
    <?php
       $day=date("w");
       $text="";
       switch($day){
           case "6":$text="суббота, которую все ждут!";break;
           case "0":$text="воскресенье - мы отдыхаем, а завтра понедельник!";break;
           default:$text="рабочий день.";
       }
       echo "Сегодня - ".$text;
    ?>  
</body>
</html>