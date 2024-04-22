<?php
    ob_start()
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/stylesheet.css">
    <title>Login</title>
</head>
<body>
<div class="main">
    <div class="child">
<div class="login-page">
    <div class="login-top-text">
        Login
    </div>
    <div class="login-facebook">
        <img class="logo-facebook" src="afbeeldingen/facebook-logo.png" alt="plaatje facebook logo">
        <div class="facebook-text text">
            login met <br> Facebook
        </div>
    </div>
    <div class="tussen-stuk">
        <div class="lijn"></div>
        <div class="of">of</div>
        <div class="lijn"></div>
    </div>
    <div class="text-top-input margin-top">E-mailadres</div>
    <form method="post">
        <input type="email" placeholder="E-mailadres" name="mail" class="login-input">
        <div class="text-top-input margin-top">Wachtwoord</div>
        <input type="password" placeholder="Wachtwoord" name="password" class="login-input">
        <div class="wachtwoord-vergeten">
            Wachtwoord vergeten
        </div>
        <div class="flex-box">
            <div class="check-box"></div>
            <div class="black-text margin-left">Onthoud mij</div>
            <input type="submit" name="login" value="inloggen" class="login-button black-text">
        </div>
    </form>


</div>
        <?php

        //ik snap de error finder zelf ook niet heb dit gecopieerd
        session_start();
        error_reporting(E_ALL);
        ini_set('display_errors', 1);

        if (isset($_POST['login'])) {
            if (isset($_POST['mail']) && isset($_POST['password'])) {
                $email = $_POST['mail'];
                $password = $_POST['password'];

                $correct_email = "voorbeeld@email.com";
                $correct_password = "wachtwoord";
                $is_admin = true;


                if ($email === $correct_email && $password === $correct_password) {
                    if ($is_admin) {
                        $_SESSION['mail'] = 'voorbeeld@email.com';
                        header("Location: index-admin.php");
                        exit();
                    }
                }

            }
        }
        ?>
    </div>
</div>
</body>
</html>