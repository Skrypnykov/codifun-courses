<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Script 10/4</title>
</head>
<body>
    <?php
       $array_name=array("Алина","Анна","Виктория","Надежда");
       foreach($array_name as $value){
           echo $value;
           echo "<br/>";
       }
       $array_age=array(19,21,18,17);
       echo count($array_age);
    ?>  
</body>
</html>