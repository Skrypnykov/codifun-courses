<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Guests book</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <style>
        th {
	        background-color:blue;
            color: white;
        }
        td{
            padding: 0 20px 0 10px;
        }
        select {
            margin: 0 0 10px;
        }
    </style>
</head>
<body>
    <div class="container">
    <h3>Insert message</h3>
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
            <input type="text" name="name" placeholder="Your name" /><br/>
            <input type="text" name="email" placeholder="Your email" /><br/>
            <textarea name="comment" id="" cols="30" rows="10"></textarea><br/>
            <input type="submit" value="Submit" />
        </form>
       
    </div>
<?php
        require "components/insert.php";
        require "components/select.php";
?>
</body>
</html>