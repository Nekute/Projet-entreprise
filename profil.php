<?php
session_start();
require_once "utils/card.php";
if (!isset($_SESSION["profile"])){
    $_SESSION["profile"] = [];
}?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style/profile.css">
    <title>Profile | Chapristi</title>
</head>
<body>
<?php
if (empty($_SESSION["profile"])){
    signIn();
}
?>
</body>
</html>
