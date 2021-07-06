<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico" />
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">   
        <link rel="stylesheet" href="style.css">
        <title>Login - Studentski parlament</title>
</head>
<body class="login-container">
    <div class="login-box">
                <section class="signup-form">
                    <h2>Registracija:</h2>
                    <form action="register_new_user.php" method="post">
                        <p><input type="text" name="uid" class="input" placeholder="Unesite korisničko ime"></p>
                        <p><input type="password" name="pwd" class="input" placeholder="Unesite lozinku"></p>                        
                        <p><input type="password" name="r_pwd" class="input" placeholder="Potvrdite lozinku"></p>
                        <p><button type="submit" name="submit" class="login-button">Potvrdi  </button></p>
                    </form>
                    <?php
                    if (isset($_GET["error"])){
                    if ($_GET["error"] == "emptyinput") {
                        echo "<p>Niste popunili sva polja!</p>";
                    }
                    elseif($_GET["error"] == "invaliduid")  {
                        echo "<p>Iskoristili se te nepravilne karaktere za korisničko ime!</p>";
                    }
                    elseif($_GET["error"] == "pwdnomatch")  {
                        echo "<p>Lozinke se ne poklapaju!</p>";
                    }
                    elseif($_GET["error"] == "usernametaken")  {
                        echo "<p>Korisničko ime je već u upotrebi!</p>";
                    }
                    }
                    ?>
                </section>
    </div>
    <div class="login-image"><img src="img\College.jpg" class="login-picutre"></div>
</body>
</html>