<?php
session_start();

	require_once 'conn.php';

  

	if(ISSET($_POST['login'])){
		if($_POST['email'] != "" || $_POST['wachtwoord'] != ""){
			$email = $_POST['email'];
            $wachtwoord = md5($_POST['wachtwoord']);
            
			$sql = "SELECT * FROM `admin` WHERE `email`=? AND `wachtwoord`=? ";
			$query = $conn->prepare($sql);
			$query->execute(array($email, $wachtwoord));
			$row = $query->rowCount();
			$fetch = $query->fetch();
			if($row > 0) {
				
				header("location: profiles.php");
			} else{
				echo "
				<script>alert('Ongeldigde e-mail of wachtwoord')</script>
				<script>window.location = 'admin_login.php'</script>
				";
			}
		}else{
			echo "
				<script>alert('Vul alle velden in alsjeblieft')</script>
				<script>window.location = 'admin_login.php'</script>
			";
		}
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">

    <title>login</title>
</head>
<body>
<section class="main">
        <div class="container">
            <div class="row">
                <div class="col-md-4 login">
                    <b>
                        <h1 style="margin-top:20px; margin-left:10px;">Admin iloggen</h1>
                    </b>
                    <br>
                    <form method="POST" enctype="multipart/form-data">

                        <div class="form group">
                            <input type="email" name="email" id="email" placeholder="myname@mail.com">
                        </div>
                        <div class="form group">
                            <input type="password" name="wachtwoord" id="password" placeholder="Wachtwoord">

                        </div>
                        <br>
                       
                        <br>
                        <div class="form group">
                            <button name="login" id="button">Inloggen</button>

                        </div>

                        <div class="form-group">
                            <input type="checkbox" onclick="showPassword()">
                            <label for="showPassword"> Laat wachtwoord zien</label>
                        </div>
                    </form>
                    <a href="registreren.php">Registreren</a>
                    <a href="index.php">Inloggen</a>
                    

</body>
</html>