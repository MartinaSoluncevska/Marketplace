<?php
require_once '../../includes/settings.php';
    $obj=new connection(new Settings());


if(!isset($_POST['submit'])){
    $name = $_POST["name"];
    $idfier = $_POST["idfier"];
   $desc=$_POST["desc"];
}

 
$query = "CALL pazari.insertArea('$name','$desc','$idfier')";
 $obj->execQuery($query,new Settings(),false);
   $obj->CloseDbConnection();
   header("Location: ../areaform.html");
   
   
   
   
   