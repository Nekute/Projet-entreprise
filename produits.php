<?php
include_once "utils/card.php";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/cardStyle.css">
    <link rel="stylesheet" href="style/tree.css">
    <link rel="stylesheet" href="style/produits.css">
    <link rel="icon" href="image/logo2.png"/>
    <title>Collection | Chapristi</title>
</head>
<body>
<div class="container">
    <?php
    include_once "utils/header.php"
    ?>
    <div class="contain">
        <img src="image/treeIcon.png" alt="tree icon" onclick="test()" id="treeIcon">
        <div class="menutop">
            <div class="path">
                <a href="index.php">Accueil <span class="pathbar">/</span></a>
                <a href="produits.php">Collection <span class="pathbar">/</span></a>
            </div>
            <h2>Notre collection</h2>
        </div>
        <div class="affichageCollection">
            <p>5 produits</p>
            <div class="filtre">
                <div class="filtre">
                    <form action="" method="post" enctype="multipart/form-data" class="research">
                        <select id="filtre" name="filtre">
                            <option value="">Dernières sorties</option>
                            <option value="">Premières sorties</option>
                            <option value="">Prix : Ordre croissant</option>
                            <option value="">Prix : Ordre décroissant</option>
                        </select>
                </div>
            </div>
        </div>
        <div class="collection">
            <?php
            card("Jungle Gym Cat Tree 2.0", "250.00", "image/gym01_280x.jpg");
            card("Mega Perch Cat Tree", "225.00", "image/megaperchcattreetowerwithtext_28.jpg");
            card("Fruit Tart Cat Bed", "30.00", "image/FruitTartBednewcolor2_280x.jpg");
            card("Milton's Cat Butt Beanie", "19.99", "image/miltcatbuttbeanieblackcolorspeck.jpg");
            card("Luxe Cloud Cat Bed", "32.00", "image/cloudcatbedwhitebackground_360x.jpg");
            ?>
        </div>
    </div>
    <?php
    include_once "utils/ground.php"
    ?>
    <?php
    include_once "utils/footer.php"
    ?>

</div>
<script src="script.js"></script>
</body>
</html>
