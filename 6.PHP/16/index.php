<?php
    require 'processing_date.php';
    $form = processingData();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Script 16/1</title>
    <style>
        input{
            margin:10px 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php
            formGeneration($form);
            echo "<hr/>";
        ?>
    </div>
   
</body>
</html>