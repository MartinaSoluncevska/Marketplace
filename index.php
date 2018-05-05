<?php
echo'
<!DOCTYPE html>
<html lang="mk">
<head>
	<title>ЈП ПАЗАРИ</title>
	<meta charset="utf-8">
        <link href="includes/index.css" rel="stylesheet" type="text/css"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

<div id="container">
    <form method="post" action="Forms/login.php">
	</br><h2>ЈП ПАЗАРИ</h2></br>
	<label for="ime">Корисничко име</label><br>
	<input type="text" id="username" name="username" value="" ></br></br>
	<label for="lozinka">Лозинка<label><br>
	<input type="password" id="password" name="password"></br></br>
	<input type="submit" value="Најави се">
</form>
</div>
</body>
</html>
';