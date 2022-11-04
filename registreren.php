<?php
session_start();
require_once 'conn.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="regist_query.php" method="POST">

    <div class="form-group">
        <label>Voornaam</label>
        <input type="text" name="voornaam">
    </div>

    <div class="form-group">
        <label>Email</label>
        <input type="email" name="email">
    </div>

    <div class="form-group">
        <label>Wachtwoord</label>
        <input type="password" name="wachtwoord">
    </div>
    
    <div class="form-group">
		<button class="btn btn-primary form-control" name="register">Registeren</button>
	</div>
</form>

</body>
</html>