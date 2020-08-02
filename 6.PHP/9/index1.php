<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Script 9/2</title>
</head>
<body>
    <?php
       echo"<h1>Итеративный подсчет суммы очков спортсмена</h1>";
       $summ=0;
       $point=5;
       $counter=0;
       while($summ<100){
           $summ += $point;
           $counter++;
       }
       echo "Общая оценка - ".$summ.", c $counter.попытки.";
    ?>  
</body>
</html>