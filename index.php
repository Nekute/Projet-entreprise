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
                    <img src="image/Arthur_Ly_cat_sleep_with_pink_pastel_background_dbbfc898-7f9b-4f72-aad4-5f7540529f46.png" alt="picture">
                </label>
                <label class="item" for="t-2">
                    <img src="image/Arthur_Ly_cat_with_blue_pastel_background_1ffb4aa0-1fd7-478a-8017-d4877491c63f.png" alt="picture">
                </label>
                <label class="item" for="t-3">

                    <img src="image/cat-g46ccb5cbe_1920.jpg" alt="picture">
                </label>
                <label class="item" for="t-4">
                    <img src="image/Arthur_Ly_cat_sleeping_with_blue_pastel_background_e08744aa-88bd-4fdd-97ab-8b1e7327a819.png" alt="picture">
                </label>
                <label class="item" for="t-5">
                    <img src="image/Arthur_Ly_cat_sleep_with_pink_pastel_background_fbc7e7b8-a3e1-4763-bf86-ff8485a9b37d.png" alt="picture">
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
                    <h2>Arbre à chat</h2>
                    <h3>Prix</h3>
                    <p>225.00 €</p>
                    <div class="fabrication">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                             class="bi bi-tree" viewBox="0 0 16 16">
                            <path d="M8.416.223a.5.5 0 0 0-.832 0l-3 4.5A.5.5 0 0 0 5 5.5h.098L3.076 8.735A.5.5 0 0 0 3.5 9.5h.191l-1.638 3.276a.5.5 0 0 0 .447.724H7V16h2v-2.5h4.5a.5.5 0 0 0 .447-.724L12.31 9.5h.191a.5.5 0 0 0 .424-.765L10.902 5.5H11a.5.5 0 0 0 .416-.777l-3-4.5zM6.437 4.758A.5.5 0 0 0 6 4.5h-.066L8 1.401 10.066 4.5H10a.5.5 0 0 0-.424.765L11.598 8.5H11.5a.5.5 0 0 0-.447.724L12.69 12.5H3.309l1.638-3.276A.5.5 0 0 0 4.5 8.5h-.098l2.022-3.235a.5.5 0 0 0 .013-.507z"/>
                        </svg>
                        <p>Fait main, en France</p>
                    </div>
                    <a href="">Ajouter au panier</a>
                    <div class="description">
                        <p>Desciption</p>
                        <svg class="svg-icon" viewBox="0 0 20 20">
                            <path fill="none" d="M11.611,10.049l-4.76-4.873c-0.303-0.31-0.297-0.804,0.012-1.105c0.309-0.304,0.803-0.293,1.105,0.012l5.306,5.433c0.304,0.31,0.296,0.805-0.012,1.105L7.83,15.928c-0.152,0.148-0.35,0.223-0.547,0.223c-0.203,0-0.406-0.08-0.559-0.236c-0.303-0.309-0.295-0.803,0.012-1.104L11.611,10.049z"></path>
                        </svg>
                    </div>
                </div>
                <img src="image/megaperchcattreetowerwithtext_28.jpg" alt="" class="imageUne">
            </div>
            <div class="articleUne">
                <div class="texteUne">
                    <h2>Arbre à chat</h2>
                    <h3>Prix</h3>
                    <p>225.00 €</p>
                    <div class="fabrication">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                             class="bi bi-tree" viewBox="0 0 16 16">
                            <path d="M8.416.223a.5.5 0 0 0-.832 0l-3 4.5A.5.5 0 0 0 5 5.5h.098L3.076 8.735A.5.5 0 0 0 3.5 9.5h.191l-1.638 3.276a.5.5 0 0 0 .447.724H7V16h2v-2.5h4.5a.5.5 0 0 0 .447-.724L12.31 9.5h.191a.5.5 0 0 0 .424-.765L10.902 5.5H11a.5.5 0 0 0 .416-.777l-3-4.5zM6.437 4.758A.5.5 0 0 0 6 4.5h-.066L8 1.401 10.066 4.5H10a.5.5 0 0 0-.424.765L11.598 8.5H11.5a.5.5 0 0 0-.447.724L12.69 12.5H3.309l1.638-3.276A.5.5 0 0 0 4.5 8.5h-.098l2.022-3.235a.5.5 0 0 0 .013-.507z"/>
                        </svg>
                        <p>Fait main, en France</p>
                    </div>
                    <a href="">Ajouter au panier</a>
                    <div class="description">
                        <p>Desciption</p>
                        <svg class="svg-icon" viewBox="0 0 20 20">
                            <path fill="none" d="M11.611,10.049l-4.76-4.873c-0.303-0.31-0.297-0.804,0.012-1.105c0.309-0.304,0.803-0.293,1.105,0.012l5.306,5.433c0.304,0.31,0.296,0.805-0.012,1.105L7.83,15.928c-0.152,0.148-0.35,0.223-0.547,0.223c-0.203,0-0.406-0.08-0.559-0.236c-0.303-0.309-0.295-0.803,0.012-1.104L11.611,10.049z"></path>
                        </svg>
                    </div>
                </div>
                <img src="image/arbre-a-chat-en-bois-du-type-cla.jpg" alt="" class="imageUne">
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
