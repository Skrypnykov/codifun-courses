<?php
    require 'processing_date.php';
    $mess = processingData();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Feedback</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <div class="container">
        <?php
            formGeneration($mess);
            echo "<hr/>";
            showData($mess);
        ?>
    </div>
</body>
</html>