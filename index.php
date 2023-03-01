<?php

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="cardStyle.css">
    <link rel="stylesheet" href="tree.css">

    <title>Accueil</title>
</head>
<body>
<div class="container">
    <header>
        <nav>
            <svg id="burger" viewBox="0 0 100 100" width="80"
                 onclick="this.classList.toggle('active'); document.querySelector('.navigation').classList.toggle('click');">
                <path class="line top"
                      d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20"/>
                <path class="line middle" d="m 30,50 h 40"/>
                <path class="line bottom"
                      d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20"/>
            </svg>
            <a href="index.php"><img src="image/Logo.png" alt="logo" class="logo"></a>
            <ul class="liste navigation">
                <li><a href="#">Accueil</a></li>
                <li id="onClickMenu"><a href="#" id="produit">Produits</a>
                    <ul class="subMenu">
                        <li><a href="">Tout</a></li>
                        <li><a href="">Jouets</a></li>
                        <li><a href="">Arbres à chat</a></li>
                        <li><a href="">Litières</a></li>
                        <li><a href="">Nourriture</a></li>
                        <li><a href="">Accessoires</a></li>
                    </ul>
                </li>
                <li><a href="#">Qui sommes-nous ?</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>
    </header>
    <div class="contain">
        <?php
        include_once "card.php";
        ?>
        <button  onclick="test()"></button>
    </div>

    <div class="ground">
        <div class="test" id="test">
            <div class="tree-group">
                <div class="tree">
                    <div class="trunk"></div>
                    <div class="tree-top"></div>
                    <div class="tree-top"></div>
                    <div class="tree-top"></div>
                </div>
                <div class="tree">
                    <div class="trunk"></div>
                    <div class="tree-top-circle"></div>
                </div>
            </div>
        </div>
    </div>
    <footer>aaaa</footer>
</div>
<script src="script.js"></script>
</body>
</html>
