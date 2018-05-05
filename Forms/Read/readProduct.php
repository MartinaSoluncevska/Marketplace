<?php
require_once '../../includes/settings.php';
    $obj=new connection(new Settings());


if(!isset($_POST['submit'])){
    $name = $_POST["name"];
    $price = $_POST["price"];
   $createdAt = $_POST["dateCrAt"];
   $desc=$_POST["desc"];
}

 
$query = "CALL pazari.insertProducts('$createdAt','$desc','$name','$price')";
 $obj->execQuery($query,new Settings(),false);
   $obj->CloseDbConnection();
   header("Location: ../productsform.html");
   
   
   
   
   