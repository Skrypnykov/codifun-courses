<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Script 5</title>
</head>
<body>
    <?php
      //объявляем две числовые переменные
      $nr1 = 11;
      $nr2 = 7;
      //вычисляем и отображаем сумму двух значений
      echo $nr1 + $nr2;
      echo " - это сумма чисел $nr1+$nr2;<br />";
      //вычисляем и отображаем разницу двух значений
      echo $nr1 - $nr2;
      echo " - это разница чисел $nr1-$nr2;<br />";
      //вычисляем и отображаем произведение двух значений
      echo $nr1 * $nr2;
      echo " - это произведение чисел $nr1*$nr2;<br />";
      //вычисляем и отображаем частное двух значений
      echo $nr1 / $nr2;
      echo " - это частное чисел $nr1/$nr2;<br />";
      //вычисляем и отображаем остаток от деления первого числа на второе
      echo $nr1 % $nr2;
      echo " - это остаток от деления числа $nr1 на $nr2;<br />";
      //вычисляем и отображаем результат возведения первого числа во вторую степень
      echo $nr1 ** 2;
      echo " - $nr1 возведено в степень 2;<br />";
    ?>  
</body>
</html>