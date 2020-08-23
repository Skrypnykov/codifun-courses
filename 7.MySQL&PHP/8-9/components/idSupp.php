<?php
$idSupp="";
if(isset($_GET['idSupp'])) $idSupp=$_GET['idSupp'];
if(isset($_POST['idSupp'])) $idSupp=$_POST['idSupp'];

if($_SERVER["REQUEST_METHOD"]=="POST"){
    require "update_supp.php";
}
?>