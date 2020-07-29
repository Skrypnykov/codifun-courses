<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Script 5/5</title>
</head>
<body>
    <?php
      $address = "ул. Богдана Хмельницкого";
      $nr = " № 77";
      //объеденяю значения двух переменных
      $rez = $address.$nr;
      echo $rez."<br />";
      //изменяю старое значение переменной $rez путем конкатенации новой строки
      $rez .= "- <ins>наш новый адрес</ins>.";
      echo $rez;
    ?>  
</body>
</html>