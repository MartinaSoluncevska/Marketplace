<?php
require_once '../../includes/settings.php';
    $obj=new connection(new Settings());


if(!isset($_POST['submit'])){
    
    $IDfier = $_POST["IDfier"];
    $name = $_POST["name"];
    $surname = $_POST["surname"];
  $mail=$_POST["mail"];
   $address = $_POST["address"];
    $embg = $_POST["embg"];
    $phone = $_POST["phone"];
   $date=$_POST["date"];
   $Password = $_POST["Password"];
   $role=$_POST["role"];
}

 
$query = "CALL pazari.insertUsers('$address','$date','$mail','$embg','$IDfier','$name','$Password','$phone','$surname',2)";
 $obj->execQuery($query,new Settings(),false);
   $obj->CloseDbConnection();
   header("Location: ../userform.html");
   
   
   
   
   