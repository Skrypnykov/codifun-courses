<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Script 6/4</title>
</head>
<body>
    <?php
        $height1=150;
        $height2=177;
        $value=168;
        if($value<$height1||$value>$height2){
            echo "Вы низкий или высокий!";
        }else {
            echo "У Вас средний рост!";
        }
    ?>  
</body>
</html>