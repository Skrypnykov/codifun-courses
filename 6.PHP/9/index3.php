<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Script 9/4</title>
</head>
<body>
    <?php
       echo"<h1>Мы проверяем действие двух включенных циклов</h1><table>";
       for($line=1;$line<=5;$line++){
           echo($line%2==0)?"<tr style='background-color:#d8f2f9'>":"<tr style='background-color:#abe3f3'>";
           for($column=1;$column<=4;$column++){
               echo"<td>cell-".$line.$column."</td>";
           }
           echo"</tr>";
       }
       echo"</table>";
    ?>  
</body>
</html>