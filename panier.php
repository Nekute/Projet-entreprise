<?php
session_start();
require_once "modele/produitDB.php";
require_once "modele/panierDB.php";
require_once "utils/card.php";
require_once "utils/session.php";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/panier.css">
    <link rel="stylesheet" href="style/produits.css">
    <link rel="icon" href="image/logo2.png"/>
    <title>Panier | Chapristi</title>
</head>
<body>
<div class="container">
    <?php
    include_once "utils/header.php";
    ?>
    <div class="containPanier">
        <div class="passerCommande">

        </div>
        <div class="panier">
            <?php
            if (empty($_SESSION["profil"])){
                foreach ($_SESSION["panier"] as $key => $value){
                    echo panierProduit($key,$value["quantite"]);
                }
            } else {
                foreach (getAllPanierProduitsByIdUser($_SESSION["profil"]) as $key => $value) {
                    echo panierProduit($value["id_produit"],$value["quantité_panier"]);
                }
            }
            ?>
        </div>
    </div>
    <?php
    include_once "utils/footer.php";
    ?>
</div>
<script src="singleProduit.js"></script>
</body>
</html>
