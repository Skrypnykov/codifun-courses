<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Script 10/3</title>
</head>
<body>
    <?php
       $array_name=array("Алина","Анна","Виктория","Надежда");
       for($i=0;$i<count($array_name);$i++){
           echo "В позиции $i находится значение <ins>$array_name[$i]</ins>";
           echo "<br />";
       }
    ?>  
</body>
</html>