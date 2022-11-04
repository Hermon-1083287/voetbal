<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src=
        "https://www.google.com/recaptcha/api.js" async defer>
    </script>
    <title>login</title>
</head>
<body>
<section class="main">
        <div class="container">
            <div class="row">
                <div class="col-md-4 login">
                    <b>
                        <h1 style="margin-top:20px; margin-left:10px;">Inloggen</h1>
                    </b>
                    <br>
                    <form action="login_query.php" method="POST">

                        <div class="form group">
                            <input type="email" name="email" id="email" placeholder="myname@mail.com">
                        </div>
                        <div class="form group">
                            <input type="password" name="wachtwoord" id="password" placeholder="Wachtwoord">

                        </div>
                        <br>
                        <div class="g-recaptcha" data-sitekey="your_site_key"></div>
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
                    <a href="wachtwoord.php">Wachtwoord vergeten?</a>
                    <a href="admin_login.php">Admin inloggen</a>

</body>
</html>