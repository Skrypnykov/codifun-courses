<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Script 9/1</title>
</head>
<body>
    <?php
        echo"<h1>Динамическое создание пронумерованного списка...</h1><ol>";
        for($i=1;$i<=7;$i++){
            echo"<li>Правило ".$i."</li>";
        }
        echo"</ol>";
    ?>  
</body>
</html>