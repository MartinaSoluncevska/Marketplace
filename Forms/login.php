<?php
/*
 * treba da se promeni kodot za koristenje na PDO, vidi includes/settings.php
 */
if(!isset($_POST['submit'])){
    $username = $_POST["username"];
    $password = $_POST["password"];
}
$con = mysql_connect("localhost", "root","sudo");
if(!$con){
    die('Database does not exist'.  mysql_error()) ;
}

        

mysql_select_db("Proba", $con);

if(!$_POST['username'] | !$_POST['password'])
{
    echo(" <SCRIPT LANGUGAGE='JavaScript'> 
             window.alert('You did not complete all the required fields')
             window.location.href='index.php'
             </SCRIPT>");
    exit();
}

 if(mysql_num_rows(mysql_query("SELECT * FROM login_users WHERE username= '$username' AND password = '$password'"))>0)
     {
     
           
    echo ("<SCRIPT LANGUAGE='JavaScript'>
            window.alert('Login Succesfully!. You are logged in as $username. Continue?')
            window.location.href='dashboard.html'
            </SCRIPT>");
    
    exit();
    
}
else{
       
    mysql_close($con);
    echo $_COOKIE['uid'];
    echo("<SCRIPT LANGUGAGE='JavaScript'> 
             window.alert('Wrong username and password combination. Please re-enter.')
             window.location.href='index.php'
             </SCRIPT>");

    exit();
}

    
    

    