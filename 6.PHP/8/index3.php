<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Script 8/4</title>
</head>
<body>
    <?php
     $val1=77;
     $val2=7.77;
     $val3="не 77";
     $val4="77";
     echo(is_numeric($val1))?"Ураа! Это  - число":"Это - не число:(";
     echo"<br/>";
     echo(is_numeric($val2))?"Ураа! Это  - число":"Это - не число:(";
     echo"<br/>";
     echo(is_numeric($val3))?"Ураа! Это  - число":"Это - не число:(";
     echo"<br/>";
     echo(is_numeric($val4))?"Ураа! Это  - число":"Это - не число:(";
    ?>  
</body>
</html>