<head>
    <link href='https://unpkg.com/css.gg@2.0.0/icons/css/shopping-bag.css' rel='stylesheet'>
</head>
<header>
    <nav>
        <div class="groupNav">
            <svg id="burger" viewBox="0 0 100 100" width="80"
                 onclick="this.classList.toggle('active'); document.querySelector('.navigation').classList.toggle('click');">
                <path class="line top"
                      d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20"/>
                <path class="line middle" d="m 30,50 h 40"/>
                <path class="line bottom"
                      d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20"/>
            </svg>
            <a href="../index.php"><img src="../image/logo2.png" alt="logo" class="logo"></a>
            <ul class="liste navigation">
                <li><a href="../index.php">Accueil</a></li>
                <li id="onClickMenu"><a href="../produits.php" id="produit">Produits</a>
                    <ul class="subMenu">
                        <li><a href="">Jouets</a></li>
                        <li><a href="">Arbres à chat</a></li>
                        <li><a href="">Litières</a></li>
                        <li><a href="">Nourriture</a></li>
                        <li><a href="">Accessoires</a></li>
                    </ul>
                </li>
                <li><a href="../biographie.php">A propos</a></li>
                <li><a href="../contact.php">Contact</a></li>
            </ul>
        </div>
        <h1>Chapristi</h1>
        <div class="compte">
            <div class="groups">
                <svg class="iconS" aria-hidden="true" viewBox="0 0 24 24">
                    <g>
                        <path d="M21.53 20.47l-3.66-3.66C19.195 15.24 20 13.214 20 11c0-4.97-4.03-9-9-9s-9 4.03-9 9 4.03 9 9 9c2.215 0 4.24-.804 5.808-2.13l3.66 3.66c.147.146.34.22.53.22s.385-.073.53-.22c.295-.293.295-.767.002-1.06zM3.5 11c0-4.135 3.365-7.5 7.5-7.5s7.5 3.365 7.5 7.5-3.365 7.5-7.5 7.5-7.5-3.365-7.5-7.5z"></path>
                    </g>
                </svg>
                <input placeholder="Search" type="search" class="inputs">
            </div>
            <a href="../panier.php"><i class="gg-shopping-bag"></i></a>
            <a href="../profil.php"><svg xmlns="http://www.w3.org/2000/svg" class="user" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0"></path>
                    <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
                </svg></a>
        </div>
    </nav>
</header>
