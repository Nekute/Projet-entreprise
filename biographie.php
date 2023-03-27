<?php
session_start();
if (!isset($_SESSION["profile"])) {
    $_SESSION["profile"] = [];
}
require_once "modele/personnel.php";
require_once "utils/card.php";
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
        <h1>Chouchoutez votre chat avec les produits Chapristi</h1>
        <div class="histoire">
            <div class="separator">
                <hr class="line">
                <span><h2>Notre histoire</h2></span>
                <hr class="line">
            </div>

            <p>Fondée il y a 10 ans à Courcouronnes, en France, Chapristi est une entreprise spécialisée dans la
                conception et la vente de produits pour chats. Son fondateur, un amoureux des chats, a lancé
                l'entreprise avec pour objectif de créer des produits de qualité pour les chats et leurs
                propriétaires.</p>
            <p>Au fil des années, l'entreprise a considérablement élargi sa gamme de produits pour devenir un leader sur
                le marché des produits pour chat. La gamme de produits de Chapristi comprend des jouets pour chat, des
                litières, des arbres à chat, des accessoires de litière, des aliments et des accessoires de soins. Tous
                les produits sont conçus pour répondre aux besoins et aux préférences des chats de tous âges et de
                toutes races.</p>
            <p>
                Les jouets sont fabriqués à partir de matériaux durables, non toxiques et respectueux de
                l'environnement, pour garantir la sécurité de votre chat. Les litières sont fabriquées avec des
                matériaux écologiques, pour garantir une utilisation respectueuse de l'environnement. Les
                arbres à chat sont conçus pour offrir un espace de divertissement et d'escalade à votre chat, tout en se
                fondant parfaitement dans votre décor.
            </p>
            <p>Notre objectif est de fournir des produits de qualité pour les chats et leur propriétaire, tout
                en veillant à respecter les normes de sécurité et de durabilité. L'entreprise s'efforce également de
                sensibiliser les propriétaires de chats aux besoins de leur animal de compagnie, et de les aider à
                prendre les meilleures décisions pour le bien-être de leur chat.</p>
        </div>
        <div class="separator">
            <hr class="line">
            <span><h2>Notre Team</h2></span>
            <hr class="line">
        </div>
        <div class="personnels">
            <?php
            foreach (getAllPersonnels() as $value) {
                personnelCard($value["id_personnel"]);
            }
            ?>
        </div>
    </div>
    <?php
    include_once 'utils/footer.php';
    ?>
</div>
<script src="script.js"></script>
</body>
</html>
