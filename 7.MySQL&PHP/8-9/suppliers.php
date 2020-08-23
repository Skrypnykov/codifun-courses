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
        <h3>Suppliers</h3>
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
            <input type="text" name="name" placeholder="Name" /><br/>
            <input type="text" name="address" placeholder="address"/><br/>
            <input type="text" name="email" placeholder="email"/><br/>
            <input type="text" name="phone" placeholder="phone"/><br/>
            <input type="submit" value="Insert" />
        </form>
    </div>
<?php
    require "components/insert_supp.php";
    require "components/select_supp.php";
?>
</body>
</html>