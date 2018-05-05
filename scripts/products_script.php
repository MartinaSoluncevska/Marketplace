
<html>
<body>
	<?php
     $name = false;
     $price = false;
     $description = false;
     $ID = false;
if(isset($_POST['name'])){
    $name = $_POST['name'];
 } 
if(isset($_POST['price'])){
    $price = $_POST['price'];
 } 
if(isset($_POST['description'])){
    $description = $_POST['description'];
 } 
if(isset($_POST['id'])){
    $ID = $_POST['id'];
 } 

     $dbc = mysqli_connect('localhost','root','','proba');

     $query = "INSERT INTO products (Name, Price, Description, ID) VALUES('$name','$price','$description','$ID')";

     $vnes = mysqli_query($dbc,$query); 

     mysqli_close($dbc);

     echo "Vnesot beshe uspeshen.";

	?>
</body>
</html>