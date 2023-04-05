<?php
session_start();
require_once "utils/card.php";
require_once "modele/utilisateurDB.php";
require_once "modele/panierDB.php";
require_once "utils/session.php";

$pseudo = null;
if ($_SERVER["REQUEST_METHOD"] == 'POST') {
    if (isset($_POST["pseudo"])) {
        $pseudo = $_POST["pseudo"];
        if (checkConnexionUser($pseudo, $_POST["mdp"])){
            $_SESSION["profil"] = getIdUserByUsername($pseudo)[0]["id_utilisateur"];
        }
    }
}
if (!isset($_SESSION["profil"])) {
    $_SESSION["profil"] = [];
}
if(!empty($_SESSION["profil"])){
    if (empty(getAllPanierProduitsByIdUser($_SESSION["profil"]))){
        foreach ($_SESSION["panier"] as $key => $value){
            ajouterPanierProduit($_SESSION["profil"],$key,$value["quantite"]);
        }
    } else {
        $_SESSION["panier"] = [];
        foreach (getAllPanierProduitsByIdUser($_SESSION["profil"]) as $key => $value){
            $_SESSION["panier"][$value["id_produit"]] = ["quantite" => $value["quantité_panier"]];
        }
    }

} ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style/profile.css">
    <title>profil | Chapristi</title>
</head>
<body>
<?php
if (empty($_SESSION["profil"])) {
    signIn($pseudo);
} else {
    echo profil($_SESSION["profil"]);
}
?>
<script src="profil.js"></script>
</body>
</html>
