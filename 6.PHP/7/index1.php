<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Script 7/2</title>
</head>
<body>
    <?php
        $month=date("m");
        $date=date("d");
        $name="";
        switch($month){
            case "01":$name="января";break;
            case "02":$name="февраля";break;
            case "03":$name="марта";break;
            case "04":$name="апреля";break;
            case "05":$name="мая";break;
            case "06":$name="июня";break;
            case "07":$name="июля";break;
            case "08":$name="августа";break;
            case "09":$name="сентября";break;
            case "10":$name="октября";break;
            case "11":$name="ноября";break;
            case "12":$name="декабря";break;
        }
        echo "Сегодня ".$date." ".$name;
    ?>  
</body>
</html>