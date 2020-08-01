<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Script 8/2</title>
</head>
<body>
    <?php
       $text="Дети по всему миру очень ждут зимние праздники!";
       $word="зимние";
       echo "Слово '".$word."' присутствует или нет? Посмотрим... Если это такб то оно в позиции... ".mb_strpos($text,$word);
    ?>  
</body>
</html>