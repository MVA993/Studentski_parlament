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
                    <h2>Dobro došli:</h2>
                    <form action="validate.php" method="post">
                        <p><input type="text" name="uid" class="input" placeholder="Ime"></p>
                        <p><input type="password" name="pwd" class="input" placeholder="Lozinka"></p>
                        <p><button type="submit" name="submit" class="login-button">Prijava   </button></p>
                    </form>
                    <p><button type="submit" name="register_btn" class="login-button" onclick="window.location.href='register.php'">Registracija   </button></p>
                </section>
                <?php
                if (isset($_GET["error"])){
                if ($_GET["error"] == "wronglogin") {
                    echo "<p>Unesite pravilne informacije!</p>";
                }
                elseif ($_GET["error"] == "none")
                    echo "<p>Uspešno ste registrovali nalog!</p>";
            }
            ?>
    </div>
    <div class="login-image"><img src="img\College.jpg" class="login-picutre"></div>
</body>
</html>