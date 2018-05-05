<?php
require_once '../../includes/settings.php';
    $obj=new connection(new Settings());


if(!isset($_POST['submit'])){
    $price = $_POST["price"];
    $crAT = $_POST["crAT"];
    $idfier = $_POST["option"];
   $desc=$_POST["desc"];
}

 
$query = "CALL pazari.insertPayments('$crAT','$idfier','$price','$desc')";
 $obj->execQuery($query,new Settings(),false);
   $obj->CloseDbConnection();
   header("Location: ../paymentsform.html");
   
   
   
   
   