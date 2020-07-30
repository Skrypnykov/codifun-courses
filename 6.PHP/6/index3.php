<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Script 6/3</title>
</head>
<body>
    <?php
        $height1=150;
        $height2=177;
        $value=168;
        if($value<$height1){
            echo "У Вас меленький рост";
        }elseif($value>=$height1 and $value<=$height2){
            echo "У Вас средний рост";
        }else {
            echo "Очень высокий!";
        }
    ?>  
</body>
</html>