<?php
session_start();
if (!isset($_SESSION["profile"])){
    $_SESSION["profile"] = [];
}
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
    <link rel="stylesheet" href="style/bio.css">
    <title>Biographie | Chapristi</title>
</head>
<body>
<div class="container">
    <?php
    include_once "utils/header.php";
    ?>
    <div class="containbio">
        <h1>"slogan"</h1>
    </div>
    <?php
    include_once 'utils/footer.php';
    ?>
</div>
<script src="script.js"></script>
</body>
</html>
