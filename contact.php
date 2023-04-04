<?php
session_start();
include_once "utils/card.php";
require_once "utils/session.php";
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="image/logo2.png"/>
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/cardStyle.css">
    <link rel="stylesheet" href="style/tree.css">
    <link rel="stylesheet" href="style/formulaire.css">
    <title>Contact | Chapristi</title>
</head>
<body>
<div class="container">
    <?php
    include_once "utils/header.php";
    ?>
    <div class="contain">
        <div class="contact">
            <div class="informations">
                <div class="infoText">
                    <p>
                        <strong>Courcouronnes</strong><br>
                        7 rue donzelot <br>
                        91080 Essonne <br>
                        +33 6 66 13 04 69 <br>
                        contact@chapristi.com
                    </p>
                </div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d21098.730001804335!2d2.3945547759347656!3d48.62245157294996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e5de728acdadfd%3A0x40b82c3688b47b0!2sCourcouronnes%2C%2091080%20%C3%89vry-Courcouronnes!5e0!3m2!1sfr!2sfr!4v1678216912041!5m2!1sfr!2sfr"
                          style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="formulaire">
                <h2>Contactez nous !</h2>
                <form method="post">
                    <?php
                    input("Nom *");
                    input("Telephone");
                    input("Email *");
                    input("Objet *");
                    ?>
                    <div class="group" id="message">
                        <textarea class="input"  id="message" name="message"></textarea>
                        <span class="bar"></span>
                    </div>
                    <div class="button-borders" id="submit">
                        <input class="primary-button" type="submit" value="Envoyer">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php
    include_once 'utils/footer.php';
    ?>
</div>

</body>
</html>
