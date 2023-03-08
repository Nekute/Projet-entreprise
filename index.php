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
    <title>Accueil | Chapristi</title>
</head>
<body>
<div class="container">
    <?php
    include_once "utils/header.php";
    ?>
    <div class="contain">
        <div class="slider">
            <button onclick="buttonNextCaroussel()" class="carousselB">
                <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 1024 1024">
                    <path fill="currentColor"
                          d="M340.864 149.312a30.592 30.592 0 0 0 0 42.752L652.736 512L340.864 831.872a30.592 30.592 0 0 0 0 42.752a29.12 29.12 0 0 0 41.728 0L714.24 534.336a32 32 0 0 0 0-44.672L382.592 149.376a29.12 29.12 0 0 0-41.728 0z"/>
                </svg>
            </button>
            <button onclick="buttonPreviousCaroussel()" class="carousselB">
                <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 1024 1024">
                    <g transform="translate(1024 0) scale(-1 1)">
                        <path fill="currentColor"
                              d="M340.864 149.312a30.592 30.592 0 0 0 0 42.752L652.736 512L340.864 831.872a30.592 30.592 0 0 0 0 42.752a29.12 29.12 0 0 0 41.728 0L714.24 534.336a32 32 0 0 0 0-44.672L382.592 149.376a29.12 29.12 0 0 0-41.728 0z"/>
                    </g>
                </svg>
            </button>
            <input type="radio" name="carousel" id="t-1" class="skrt">
            <input type="radio" name="carousel" id="t-2" class="skrt">
            <input type="radio" name="carousel" id="t-3" checked class="skrt">
            <input type="radio" name="carousel" id="t-4" class="skrt">
            <input type="radio" name="carousel" id="t-5" class="skrt">
            <div class="myCarousel">
                <label class="item" for="t-1">
                    <img src="image/cat-g46ccb5cbe_1920.jpg" alt="picture">
                </label>
                <label class="item" for="t-2">
                    <img src="image/arbre-a-chat-en-bois-du-type-cla.jpg" alt="picture">
                </label>
                <label class="item" for="t-3">
                    <img src="image/cat-g46ccb5cbe_1920.jpg" alt="picture">
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
        <img src="image/treeIcon.png" alt="tree icon" onclick="test()" id="treeIcon">
        <div class="alaune">
            <h2>A la une</h2>
            <div class="articleUne">
                <div class="texteUne">
                </div>
                <div class="imageUne">
                    <img src="image/megaperchcattreetowerwithtext_28.jpg" alt="">
                </div>
            </div>
            <div class="articleUne">
                <div class="texteUne">
                </div>
                <div class="imageUne">
                    <img src="image/gym01_280x.jpg" alt="">
                </div>
            </div>
        </div>
        <div class="banner">
            <img src="image/cat%20banner2.png" alt="cat-banner" id="catBanner">
        </div>
        <div id="collection">
            <div class="titreColleciton">
                <h2>Notre collection</h2>
                <div class="voirplus">
                    <a href="produits.php">Voir plus</a>
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
