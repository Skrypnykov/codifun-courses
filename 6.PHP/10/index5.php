<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Script 10/6</title>
</head>
<body>
    <?php
       $array_name=array("Алина"=>19,"Анна"=>21,"Виктория"=>18,"Надежда"=>17);
       foreach($array_name as $age=>$age_value){
           echo "Ключ -".$age.", имеет значение -".$age_value;
           echo "<br/>";
       }
    ?>  
</body>
</html>