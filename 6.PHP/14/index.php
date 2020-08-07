<?php
    require 'processing_date.php';
    $mess = processingData();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PHP 14/1</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <?php getinfo();?>
    <div class="container">
        <?php
            echo "<span class='messages'>".$mess."</span>";
            formGeneration();
        ?>
    </div>
</body>
</html>