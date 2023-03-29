<?php
session_start();
require_once "utils/card.php";
require_once "modele/produitDB.php";
$id = null;
$erreur = null;
$quantite = 1;
if (!isset($id) || is_numeric($_GET["id"])) {
    $id = $_GET["id"];
} else {
    $erreur = "pu sa mèr";
}
if (!isset($_SESSION["profil"])){
    $_SESSION["profil"] = [];
}
if ($_SERVER["REQUEST_METHOD"] == 'POST') {
    if (isset($_POST["quantity"])) {
        if (is_numeric($_POST["quantity"]) && $_POST["quantity"]>0) {
            $quantite = $_POST["quantity"];
            if (empty($_SESSION["profil"])){
                $_SESSION["panier"][$id] = ["quantite" => $quantite];
            }
        }
    }
}
print_r($_SESSION);
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
        echo "<div class=\"containSingleProduit\">" . singleArticle($id, $quantite) . "
</div>";
    } ?>
    <?php
    include_once "utils/footer.php";
    ?>

</div>
<script src="singleProduit.js"></script>
</body>
</html>

