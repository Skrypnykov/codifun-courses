<?php
require "connect.php";
echo "<table><tr><th>ID</th><th>Name</th><th>Email</th><th>Message</th><th>Date/Time of writing the message</th></tr>";
class TableRows extends RecursiveIteratorIterator{
    function __conctruct($it){
        parent::__conctruct($it,self::LEAVES_ONLY);
    }
    function current(){
        return "<td>".parent::current()."</td>";
    }
    function beginChildren(){
        echo "<tr>";
    }
    function endChildren(){
        echo "</tr>"."\n";
    }
}
try{
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $select=$conn->prepare("SELECT * FROM guest;");
    $select->execute();
    $result=$select->setFetchMode(PDO::FETCH_ASSOC);
    foreach(new TableRows(new RecursiveArrayIterator($select->fetchAll()))as $k=>$val){
        echo $val;
    }
}
catch(PDOException $e){
    echo "Error: ".$e->getMessage();
    }
echo "</table>";
$conn=null;
?>