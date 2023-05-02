<?php
session_start();
require_once "modele/produitDB.php";
require_once "modele/panierDB.php";
require_once "utils/card.php";
require_once "utils/session.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_SESSION["profil"])) {
        if (isset($_POST["retirerProduit"])) {
            modifierQuantitePanier($_SESSION["profil"], $_POST["retirerProduit"], 0);
        } else if (isset($_POST["quantitePanier"])) {
            modifierQuantitePanier($_SESSION["profil"], $_POST["idProduit"], $_POST["quantitePanier"]);
        } else if (isset($_POST["retirerProduits"])) {
            DeleteAllPanierByIdUser($_SESSION["profil"]);
        }
    }
    if (isset($_POST["retirerProduit"])) {
        unset($_SESSION["panier"][$_POST["retirerProduit"]]);
    } else if (isset($_POST["quantitePanier"])) {
        $_SESSION["panier"][$_POST["idProduit"]]["quantite"] = $_POST["quantitePanier"];
    } else if (isset($_POST["retirerProduits"])) {
        $_SESSION["panier"] = [];
    }
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
            <form method="post">
                <?php
                if (empty($_SESSION["profil"])) {
                    ?> <div class="commandes"><label for="email">Email</label>
                    <input type="email" id="email" placeholder="Email"></div><?php
                }
                ?>
            </form>
        </div>
        <div class="panier">
            <?php
            if (empty($_SESSION["profil"])) {
                foreach ($_SESSION["panier"] as $key => $value) {
                    echo panierProduit($key, $value["quantite"]);
                }
            } else {
                foreach (getAllPanierProduitsByIdUser($_SESSION["profil"]) as $key => $value) {
                    echo panierProduit($value["id_produit"], $value["quantité_panier"]);
                }
            }
            ?>
            <div class="total">
                <p>Total :
                    <?php
                    $total = 0;
                    if (empty($_SESSION["profil"])) {
                        foreach ($_SESSION["panier"] as $key => $value) {
                            $total += getProduitById($key)[0]["prix_produit"] * $value["quantite"];
                        }
                    } else {
                        $total += getTotalPanier($_SESSION["profil"])[0]["sum(quantité_panier * produits.prix_produit)"];
                    }
                    echo $total;
                    ?> €
                </p>
                <form method="post">
                    <input type="submit" name="retirerProduits" value="Retirer tous les produits">
                </form>
            </div>
        </div>
    </div>
    <?php
    include_once "utils/footer.php";
    ?>
</div>
<script src="singleProduit.js"></script>
</body>
</html>
