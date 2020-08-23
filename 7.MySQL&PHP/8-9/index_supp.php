<?php
        require "components/connect.php";
        require "components/idSupp.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Suppliers</title>
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
        <form action="<?php echo $_SERVER['SCRIPT_NAME'];?>" method="GET">
            <fieldset>
                <legend>Select supplier</legend>
                <select name="idSupp">
                <?php
                    try{
                        $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                        $select=$conn->prepare("SELECT * FROM suppliers;");
                        $select->execute();
                        $result=$select->setFetchMode(PDO::FETCH_ASSOC);
                        foreach($select->fetchAll() as $k=>$val){
                ?>
                        <option value="<?php echo $val['idSupp'];?>" <?php if($val['idSupp']==$idSupp) echo "Selected";?>><?php echo $val['nameSupp'];?></option>
                <?php
                        }
                    }
                    catch(PDOException $e){
                        echo "Error: ".$e->getMessage();
                    }
                ?>
                </select></br>
                <input type="submit" value="Select Supplier" />
            </fieldset>        
        </form>
        <?php
            if($idSupp !=""){
                try{
                    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                    $select=$conn->prepare("SELECT * FROM suppliers WHERE idSupp=$idSupp;");
                    $select->execute();
                    $result=$select->setFetchMode(PDO::FETCH_ASSOC);
                    foreach($select->fetchAll() as $k=>$val){
                    ?>
                        <h3>Modify data</h3>
                        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
                            <input type="hidden" name="idSupp" value="<?php echo $idSupp;?>" />
                            <input type="text" name="name" value="<?php echo $val['nameSupp']; ?>" /></br>
                            <input type="text" name="address" value="<?php echo $val['addressSupp']; ?>" /></br>
                            <input type="text" name="email" value="<?php echo $val['email']; ?>" /></br>
                            <input type="text" name="phone" value="<?php echo $val['phone']; ?>" /></br>
                            <input type="submit" value="Update data"/>             
                        </form>
        <?php
                    }
                }
                catch(PDOException $e){
                    echo "Error: ".$e->getMessage();
                    }
            }
            require "components/select_supp.php";
            $conn=null;
        ?>
    </div>

</body>
</html>