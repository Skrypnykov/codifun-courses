<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Script 12/3</title>
</head>
<body>
    <?php
       function power(){
            static $x=0;
            $x+=3;
            return $x*$x;
       }
       for($i=1;$i<4;$i++){
            echo "<br/>Значение, возвращаемое функцией $i раз: ".power() ;
       }
    ?>  
</body>
</html>