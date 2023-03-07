<?php
require_once "utils/card.php";
$photo[] = "arbre-a-chat-design.jpg";
$photo[] = "arbre-a-chat-en-bois-du-type-cla.jpg";
$i = 0;
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
    <link rel="stylesheet" href="style/caroussel.css">
    <link rel="icon" href="image/logo2.png"/>
    <title>Accueil</title>
</head>
<body>
<div class="container">
    <?php
    include_once "utils/header.php";
    ?>
    <div class="contain">
        <div class="slider">
            <input type="radio" name="carousel" id="t-1">
            <input type="radio" name="carousel" id="t-2">
            <input type="radio" name="carousel" id="t-3" checked>
            <input type="radio" name="carousel" id="t-4">
            <input type="radio" name="carousel" id="t-5">
            <div class="myCarousel">
                <label class="item" for="t-1">
                    <img src="image/arbre-a-chat-design.jpg" alt="picture">
                </label>
                <label class="item" for="t-2">
                    <img src="image/arbre-a-chat-en-bois-du-type-cla.jpg" alt="picture">
                </label>
                <label class="item" for="t-3">
                    <img src="image/cat%20banner.png" alt="picture">
                </label>
                <label class="item" for="t-4">
                    <img src="image/cat%20banner2.png" alt="picture">
                </label>
                <label class="item" for="t-5">
                    <img src="image/gym01_280x.jpg" alt="picture">
                </label>
            </div>
            <div class="dots">
                <label for="t-1"></label>
                <label for="t-2"></label>
                <label for="t-3"></label>
                <label for="t-4"></label>
                <label for="t-5"></label>
            </div>
        </div>
        <h1>Chapristi</h1>
        <img src="image/treeIcon.png" alt="tree icon" onclick="test()" id="treeIcon">
        <div class="banner">
            <img src="image/cat%20banner2.png" alt="cat-banner" id="catBanner">
        </div>
        <div id="collection">
            <div class="titreColleciton">
                <h2>Notre collection</h2>
                <div class="voirplus">
                    <a href="">Voir plus</a>
                </div>
            </div>
            <div class="cardCollection">
                <?php
                card("Jungle Gym Cat Tree 2.0", "250.00", "image/gym01_280x.jpg");
                card("Mega Perch Cat Tree", "225.00", "image/megaperchcattreetowerwithtext_28.jpg");
                card("Fruit Tart Cat Bed", "30.00", "image/FruitTartBednewcolor2_280x.jpg");
                card("Milton's Cat Butt Beanie", "19.99", "image/miltcatbuttbeanieblackcolorspeck.jpg");
                card("Luxe Cloud Cat Bed", "32.00", "image/cloudcatbedwhitebackground_360x.jpg");
                ?>
            </div>
        </div>
    </div>

    <?php
    include_once "utils/ground.php"
    ?>
    <?php
    include_once "utils/footer.php";
    ?>
</div>
<script src="script.js"></script>
</body>
</html>
