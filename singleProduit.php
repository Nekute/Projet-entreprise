<?php
require_once "utils/card.php";
require_once "modele/produitDB.php";
$id = null;
$erreur = null;
if (!empty($id) || is_numeric($_GET["id"])) {
    $id = $_GET["id"];
} else {
    $erreur = "pu sa mèr";
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/produits.css">
    <link rel="icon" href="image/logo2.png"/>
    <title>Produit | Chapristi</title>
</head>
<body>
<div class="container">
    <?php
    include_once "utils/header.php";
    ?>
    <?php
    if (isset($erreur)) {
        echo $erreur;
    } else {
        echo "<div class=\"containSingleProduit\">" . article($id) . "
</div>";
    } ?>
    <?php
    include_once "utils/footer.php";
    ?>
</div>
</body>
</html>

