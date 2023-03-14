
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
        <div class="compte">
            <div class="groups">
                <svg class="iconS" aria-hidden="true" viewBox="0 0 24 24">
                    <g>
                        <path d="M21.53 20.47l-3.66-3.66C19.195 15.24 20 13.214 20 11c0-4.97-4.03-9-9-9s-9 4.03-9 9 4.03 9 9 9c2.215 0 4.24-.804 5.808-2.13l3.66 3.66c.147.146.34.22.53.22s.385-.073.53-.22c.295-.293.295-.767.002-1.06zM3.5 11c0-4.135 3.365-7.5 7.5-7.5s7.5 3.365 7.5 7.5-3.365 7.5-7.5 7.5-7.5-3.365-7.5-7.5z"></path>
                    </g>
                </svg>
                <input placeholder="Search" type="search" class="inputs">
            </div>
            <a href="../panier.php"><svg class="svg-icon" viewBox="0 0 20 20">
                    <path fill="none" d="M17.696,9.368H2.305c-0.189,0-0.367,0.092-0.478,0.245c-0.11,0.155-0.141,0.352-0.08,0.532l2.334,6.918c0.081,0.238,0.305,0.4,0.556,0.4h10.735c0.253,0,0.478-0.162,0.557-0.402l2.323-6.917c0.062-0.179,0.03-0.376-0.079-0.531C18.062,9.459,17.886,9.368,17.696,9.368z M14.95,16.287H5.062l-1.938-5.743h13.753L14.95,16.287z"></path>
                    <path fill="none" d="M6.345,7.369c0.325,0,0.588-0.263,0.588-0.588c0-1.691,1.376-3.067,3.067-3.067c1.691,0,3.067,1.376,3.067,3.067c0,0.325,0.264,0.588,0.588,0.588c0.326,0,0.589-0.263,0.589-0.588c0-2.34-1.904-4.243-4.244-4.243c-2.34,0-4.244,1.903-4.244,4.243C5.757,7.106,6.02,7.369,6.345,7.369z"></path>
                </svg></a>
            <a href="../profil.php"><svg class="svg-icon" viewBox="0 0 20 20">
                    <path fill="none" d="M10,10.9c2.373,0,4.303-1.932,4.303-4.306c0-2.372-1.93-4.302-4.303-4.302S5.696,4.223,5.696,6.594C5.696,8.969,7.627,10.9,10,10.9z M10,3.331c1.801,0,3.266,1.463,3.266,3.263c0,1.802-1.465,3.267-3.266,3.267c-1.8,0-3.265-1.465-3.265-3.267C6.735,4.794,8.2,3.331,10,3.331z"></path>
                    <path fill="none" d="M10,12.503c-4.418,0-7.878,2.058-7.878,4.685c0,0.288,0.231,0.52,0.52,0.52c0.287,0,0.519-0.231,0.519-0.52c0-1.976,3.132-3.646,6.84-3.646c3.707,0,6.838,1.671,6.838,3.646c0,0.288,0.234,0.52,0.521,0.52s0.52-0.231,0.52-0.52C17.879,14.561,14.418,12.503,10,12.503z"></path>
                </svg></a>
        </div>
    </nav>
</header>
