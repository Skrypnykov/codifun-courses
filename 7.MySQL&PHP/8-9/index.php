<?php
        require "components/connect.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Insert data</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <div class="container">
        <h3>Insert data</h3>
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
            <input type="text" name="name" placeholder="Product name" pattern="[A-z]{1,20}"/><br/>
            <input type="text" name="cost" placeholder="Product cost" pattern="[0-9]{1,7}(\.)?[0-9]{0,4}"/><br/>
            <input type="text" name="quantity" placeholder="Quantity" pattern="[0-9]{1,7}"/><br/>
            <input type="submit" value="Insert" />
        </form>
    </div>
<?php
    require "components/insert.php";
    require "components/select.php";
?>
</body>
</html>