<?php
function card($id): string
{
    $produit = getProduitById($id)[0];
    return "<div class=\"card\"><a href='../singleProduit.php?id=$id'>
    <div class=\"image\">
        <img src=\"image/" . $produit["image_produit"] . "\" alt=\"\">
    </div>
    <div class=\"titre\">
        <h3>" . $produit["nom_produit"] . "</h3>
    </div>
    <div class=\"prix\">
        <p>" . $produit["prix_produit"] . " €</p>
    </div>
    <div class=\"note\">
        <svg class='star' data-name=\"Layer 1\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 122.88 117.19\"><title>black-star</title><path d=\"M64.39,2,80.11,38.76,120,42.33a3.2,3.2,0,0,1,1.83,5.59h0L91.64,74.25l8.92,39a3.2,3.2,0,0,1-4.87,3.4L61.44,96.19,27.09,116.73a3.2,3.2,0,0,1-4.76-3.46h0l8.92-39L1.09,47.92A3.2,3.2,0,0,1,3,42.32l39.74-3.56L58.49,2a3.2,3.2,0,0,1,5.9,0Z\"></path></svg>
        <svg class='star' data-name=\"Layer 1\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 122.88 117.19\"><title>black-star</title><path d=\"M64.39,2,80.11,38.76,120,42.33a3.2,3.2,0,0,1,1.83,5.59h0L91.64,74.25l8.92,39a3.2,3.2,0,0,1-4.87,3.4L61.44,96.19,27.09,116.73a3.2,3.2,0,0,1-4.76-3.46h0l8.92-39L1.09,47.92A3.2,3.2,0,0,1,3,42.32l39.74-3.56L58.49,2a3.2,3.2,0,0,1,5.9,0Z\"></path></svg>
        <svg class='star' data-name=\"Layer 1\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 122.88 117.19\"><title>black-star</title><path d=\"M64.39,2,80.11,38.76,120,42.33a3.2,3.2,0,0,1,1.83,5.59h0L91.64,74.25l8.92,39a3.2,3.2,0,0,1-4.87,3.4L61.44,96.19,27.09,116.73a3.2,3.2,0,0,1-4.76-3.46h0l8.92-39L1.09,47.92A3.2,3.2,0,0,1,3,42.32l39.74-3.56L58.49,2a3.2,3.2,0,0,1,5.9,0Z\"></path></svg>
        <svg class='star' data-name=\"Layer 1\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 122.88 117.19\"><title>black-star</title><path d=\"M64.39,2,80.11,38.76,120,42.33a3.2,3.2,0,0,1,1.83,5.59h0L91.64,74.25l8.92,39a3.2,3.2,0,0,1-4.87,3.4L61.44,96.19,27.09,116.73a3.2,3.2,0,0,1-4.76-3.46h0l8.92-39L1.09,47.92A3.2,3.2,0,0,1,3,42.32l39.74-3.56L58.49,2a3.2,3.2,0,0,1,5.9,0Z\"></path></svg>
        <svg class='star' data-name=\"Layer 1\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 122.88 117.19\"><title>black-star</title><path d=\"M64.39,2,80.11,38.76,120,42.33a3.2,3.2,0,0,1,1.83,5.59h0L91.64,74.25l8.92,39a3.2,3.2,0,0,1-4.87,3.4L61.44,96.19,27.09,116.73a3.2,3.2,0,0,1-4.76-3.46h0l8.92-39L1.09,47.92A3.2,3.2,0,0,1,3,42.32l39.74-3.56L58.49,2a3.2,3.2,0,0,1,5.9,0Z\"></path></svg>
   <p>" . $produit["note_produit"] . "</p>
    </div>
</a></div>";
}

function input($class): void
{
    $oui = explode(" ", $class);
    echo "<div class=\"group\" id=\"" . strtolower($oui[0]) . "\">
                        <input required=\"\" type=\"text\" class=\"input\" name=\"" . strtolower($oui[0]) . "\">
                        <span class=\"bar\"></span>
                        <label for=\"" . strtolower($oui[0]) . "\">$class</label>
                    </div>";
}

function article($id): string
{
    $produit = getProduitById($id)[0];
    return "
    <div class=\"articleUne\">
                <div class=\"texteUne\">
                    <h2>" . $produit["nom_produit"] . "</h2>
                    <h3>Prix</h3>
                    <p>" . $produit["prix_produit"] . " €</p>
                    <div class=\"fabrication\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\"
                             class=\"bi bi-tree\" viewBox=\"0 0 16 16\">
                            <path d=\"M8.416.223a.5.5 0 0 0-.832 0l-3 4.5A.5.5 0 0 0 5 5.5h.098L3.076 8.735A.5.5 0 0 0 3.5 9.5h.191l-1.638 3.276a.5.5 0 0 0 .447.724H7V16h2v-2.5h4.5a.5.5 0 0 0 .447-.724L12.31 9.5h.191a.5.5 0 0 0 .424-.765L10.902 5.5H11a.5.5 0 0 0 .416-.777l-3-4.5zM6.437 4.758A.5.5 0 0 0 6 4.5h-.066L8 1.401 10.066 4.5H10a.5.5 0 0 0-.424.765L11.598 8.5H11.5a.5.5 0 0 0-.447.724L12.69 12.5H3.309l1.638-3.276A.5.5 0 0 0 4.5 8.5h-.098l2.022-3.235a.5.5 0 0 0 .013-.507z\"/>
                        </svg>
                        <p>Fait main, en France</p>
                    </div>
                    <a href=\"../singleProduit.php?id=$id\">Ajouter au panier</a>
                    <div class=\"description\" onclick='this.parentNode.querySelector(\".descriptionText\").classList.toggle(\"show\");this.parentNode.querySelector(\".description\").classList.toggle(\"rotateSvg\")'>
                        <p>Desciption</p>
                        <svg class=\"svg-icon\" viewBox=\"0 0 20 20\">
                            <path fill=\"none\" d=\"M11.611,10.049l-4.76-4.873c-0.303-0.31-0.297-0.804,0.012-1.105c0.309-0.304,0.803-0.293,1.105,0.012l5.306,5.433c0.304,0.31,0.296,0.805-0.012,1.105L7.83,15.928c-0.152,0.148-0.35,0.223-0.547,0.223c-0.203,0-0.406-0.08-0.559-0.236c-0.303-0.309-0.295-0.803,0.012-1.104L11.611,10.049z\"></path>
                        </svg>
                    </div>
                    <div class='descriptionText' class>
                    <p>Proin ultricies luctus nisl sed pulvinar. Aenean vehicula eu mi nec rhoncus. Fusce interdum vitae orci eu volutpat. Phasellus non semper tortor. Praesent accumsan posuere arcu, non interdum tellus commodo sit amet. Aenean dapibus ornare auctor. Sed nec risus leo. Sed auctor dolor massa, eu ornare erat rhoncus in. Duis elementum rhoncus nisl vel pellentesque. Pellentesque pretium viverra vulputate. Sed tristique auctor lacus, nec efficitur odio aliquam a.</p>
</div>
                </div>
                <img src=\"image/" . $produit["image_produit"] . "\" alt=\"\" class=\"imageUne\">
            </div>";
}

function singleArticle($id, $quantite): string
{
    $produit = getProduitById($id)[0];
    return "
    <div class=\"articleUne\">
                <div class=\"texteUne\">
                    <h2>" . $produit["nom_produit"] . "</h2>
                    <h3>Prix</h3>
                    <p>" . $produit["prix_produit"] . " €</p>
                    <div class=\"fabrication\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\"
                             class=\"bi bi-tree\" viewBox=\"0 0 16 16\">
                            <path d=\"M8.416.223a.5.5 0 0 0-.832 0l-3 4.5A.5.5 0 0 0 5 5.5h.098L3.076 8.735A.5.5 0 0 0 3.5 9.5h.191l-1.638 3.276a.5.5 0 0 0 .447.724H7V16h2v-2.5h4.5a.5.5 0 0 0 .447-.724L12.31 9.5h.191a.5.5 0 0 0 .424-.765L10.902 5.5H11a.5.5 0 0 0 .416-.777l-3-4.5zM6.437 4.758A.5.5 0 0 0 6 4.5h-.066L8 1.401 10.066 4.5H10a.5.5 0 0 0-.424.765L11.598 8.5H11.5a.5.5 0 0 0-.447.724L12.69 12.5H3.309l1.638-3.276A.5.5 0 0 0 4.5 8.5h-.098l2.022-3.235a.5.5 0 0 0 .013-.507z\"/>
                        </svg>
                        <p>Fait main, en France</p>
                    </div>
                    <div class='quantite'>
                    <form method='post'><div class='quantite selectQuantity'>
            <button type='button' id='minus-button'><svg data-darkreader-inline-stroke=\"\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.5\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\" aria-hidden=\"true\">
  <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M18 12H6\"></path>
</svg>
</button>

                    <input type=\"text\" id=\"quantity\" name=\"quantity\" value='$quantite'
    oninput=\"this.value = this.value.replace(/[^1-9]/g, '').replace(/(\..*)\./g, '$1');\" />


            <button type='button' id='plus-button'><svg data-darkreader-inline-stroke=\"\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.5\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\" aria-hidden=\"true\">
  <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M12 6v12m6-6H6\"></path>
</svg>
</button></div>
<input type=\"submit\" value='Ajouter au panier'>
</form></div>
                    <div class=\"description\" onclick='this.parentNode.querySelector(\".descriptionText\").classList.toggle(\"show\");this.parentNode.querySelector(\".description\").classList.toggle(\"rotateSvg\")'>
                        <p>Desciption</p>
                        <svg class=\"svg-icon\" viewBox=\"0 0 20 20\">
                            <path fill=\"none\" d=\"M11.611,10.049l-4.76-4.873c-0.303-0.31-0.297-0.804,0.012-1.105c0.309-0.304,0.803-0.293,1.105,0.012l5.306,5.433c0.304,0.31,0.296,0.805-0.012,1.105L7.83,15.928c-0.152,0.148-0.35,0.223-0.547,0.223c-0.203,0-0.406-0.08-0.559-0.236c-0.303-0.309-0.295-0.803,0.012-1.104L11.611,10.049z\"></path>
                        </svg>
                    </div>
                    <div class='descriptionText' class>
                    <p>Proin ultricies luctus nisl sed pulvinar. Aenean vehicula eu mi nec rhoncus. Fusce interdum vitae orci eu volutpat. Phasellus non semper tortor. Praesent accumsan posuere arcu, non interdum tellus commodo sit amet. Aenean dapibus ornare auctor. Sed nec risus leo. Sed auctor dolor massa, eu ornare erat rhoncus in. Duis elementum rhoncus nisl vel pellentesque. Pellentesque pretium viverra vulputate. Sed tristique auctor lacus, nec efficitur odio aliquam a.</p>
</div>
                </div>
                <img src=\"image/" . $produit["image_produit"] . "\" alt=\"\" class=\"imageUne\">
            </div>";
}

function signIn(): void
{
    echo "
<a href='../index.php' id='backToAccueil'>
<svg
  width=\"24\"
  height=\"24\"
  viewBox=\"0 0 24 24\"
  fill=\"none\"
  xmlns=\"http://www.w3.org/2000/svg\"
>
  <path
    d=\"M20.3284 11.0001V13.0001L7.50011 13.0001L10.7426 16.2426L9.32842 17.6568L3.67157 12L9.32842 6.34314L10.7426 7.75735L7.49988 11.0001L20.3284 11.0001Z\"
    fill=\"currentColor\"
        />
</svg></a>
<div class='contain'><form class=\"form_container\">
  <div class=\"logo_container\"></div>
  <div class=\"title_container\">
    <p class=\"title\">Login to your Account</p>
    <span class=\"subtitle\">Get started with our app, just create an account and enjoy the experience.</span>
  </div>
  <br>
  <div class=\"input_container\">
    <label class=\"input_label\" for=\"email_field\">Pseudo</label>
    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon icon-tabler icon-tabler-user\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
   <path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path>
   <path d=\"M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0\"></path>
   <path d=\"M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2\"></path>
</svg>
    <input placeholder=\"Pseudo\" name=\"input-name\" type=\"text\" class=\"input_field\" id=\"email_field\">
  </div>
  <div class=\"input_container\">
    <label class=\"input_label\" for=\"password_field\">Mot de passe</label>
    <svg fill=\"none\" viewBox=\"0 0 24 24\" height=\"24\" width=\"24\" xmlns=\"http://www.w3.org/2000/svg\" class=\"icon\">
      <path stroke-linecap=\"round\" stroke-width=\"1.5\" stroke=\"#141B34\" d=\"M18 11.0041C17.4166 9.91704 16.273 9.15775 14.9519 9.0993C13.477 9.03404 11.9788 9 10.329 9C8.67911 9 7.18091 9.03404 5.70604 9.0993C3.95328 9.17685 2.51295 10.4881 2.27882 12.1618C2.12602 13.2541 2 14.3734 2 15.5134C2 16.6534 2.12602 17.7727 2.27882 18.865C2.51295 20.5387 3.95328 21.8499 5.70604 21.9275C6.42013 21.9591 7.26041 21.9834 8 22\"></path>
      <path stroke-linejoin=\"round\" stroke-linecap=\"round\" stroke-width=\"1.5\" stroke=\"#141B34\" d=\"M6 9V6.5C6 4.01472 8.01472 2 10.5 2C12.9853 2 15 4.01472 15 6.5V9\"></path>
      <path fill=\"#141B34\" d=\"M21.2046 15.1045L20.6242 15.6956V15.6956L21.2046 15.1045ZM21.4196 16.4767C21.7461 16.7972 22.2706 16.7924 22.5911 16.466C22.9116 16.1395 22.9068 15.615 22.5804 15.2945L21.4196 16.4767ZM18.0228 15.1045L17.4424 14.5134V14.5134L18.0228 15.1045ZM18.2379 18.0387C18.5643 18.3593 19.0888 18.3545 19.4094 18.028C19.7299 17.7016 19.7251 17.1771 19.3987 16.8565L18.2379 18.0387ZM14.2603 20.7619C13.7039 21.3082 12.7957 21.3082 12.2394 20.7619L11.0786 21.9441C12.2794 23.1232 14.2202 23.1232 15.4211 21.9441L14.2603 20.7619ZM12.2394 20.7619C11.6914 20.2239 11.6914 19.358 12.2394 18.82L11.0786 17.6378C9.86927 18.8252 9.86927 20.7567 11.0786 21.9441L12.2394 20.7619ZM12.2394 18.82C12.7957 18.2737 13.7039 18.2737 14.2603 18.82L15.4211 17.6378C14.2202 16.4587 12.2794 16.4587 11.0786 17.6378L12.2394 18.82ZM14.2603 18.82C14.8082 19.358 14.8082 20.2239 14.2603 20.7619L15.4211 21.9441C16.6304 20.7567 16.6304 18.8252 15.4211 17.6378L14.2603 18.82ZM20.6242 15.6956L21.4196 16.4767L22.5804 15.2945L21.785 14.5134L20.6242 15.6956ZM15.4211 18.82L17.8078 16.4767L16.647 15.2944L14.2603 17.6377L15.4211 18.82ZM17.8078 16.4767L18.6032 15.6956L17.4424 14.5134L16.647 15.2945L17.8078 16.4767ZM16.647 16.4767L18.2379 18.0387L19.3987 16.8565L17.8078 15.2945L16.647 16.4767ZM21.785 14.5134C21.4266 14.1616 21.0998 13.8383 20.7993 13.6131C20.4791 13.3732 20.096 13.1716 19.6137 13.1716V14.8284C19.6145 14.8284 19.619 14.8273 19.6395 14.8357C19.6663 14.8466 19.7183 14.8735 19.806 14.9391C19.9969 15.0822 20.2326 15.3112 20.6242 15.6956L21.785 14.5134ZM18.6032 15.6956C18.9948 15.3112 19.2305 15.0822 19.4215 14.9391C19.5091 14.8735 19.5611 14.8466 19.5879 14.8357C19.6084 14.8273 19.6129 14.8284 19.6137 14.8284V13.1716C19.1314 13.1716 18.7483 13.3732 18.4281 13.6131C18.1276 13.8383 17.8008 14.1616 17.4424 14.5134L18.6032 15.6956Z\"></path>
    </svg>
    <input placeholder=\"Mot de passe\" name=\"input-name\" type=\"password\" class=\"input_field\" id=\"password_field\">
  </div>
  <button title=\"Sign In\" type=\"submit\" class=\"sign-in_btn\">
    <span>Se connecter</span>
  </button>
<button title=\"Sign In\" type=\"submit\" class=\"sign-in_ggl\">
    <svg height=\"18\" width=\"18\" viewBox=\"0 0 32 32\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" xmlns=\"http://www.w3.org/2000/svg\">
      <defs>
        <path d=\"M44.5 20H24v8.5h11.8C34.7 33.9 30.1 37 24 37c-7.2 0-13-5.8-13-13s5.8-13 13-13c3.1 0 5.9 1.1 8.1 2.9l6.4-6.4C34.6 4.1 29.6 2 24 2 11.8 2 2 11.8 2 24s9.8 22 22 22c11 0 21-8 21-22 0-1.3-.2-2.7-.5-4z\" id=\"A\"></path>
      </defs>
      <clipPath id=\"B\">
        
      </clipPath>
      <g transform=\"matrix(.727273 0 0 .727273 -.954545 -1.45455)\">
        <path fill=\"#fbbc05\" clip-path=\"url(#B)\" d=\"M0 37V11l17 13z\"></path>
        <path fill=\"#ea4335\" clip-path=\"url(#B)\" d=\"M0 11l17 13 7-6.1L48 14V0H0z\"></path>
        <path fill=\"#34a853\" clip-path=\"url(#B)\" d=\"M0 37l30-23 7.9 1L48 0v48H0z\"></path>
        <path fill=\"#4285f4\" clip-path=\"url(#B)\" d=\"M48 48L17 24l-4-3 35-10z\"></path>
      </g>
    </svg>
    <span>Se connecter avec Google</span>
  </button>
  <div class=\"separator\">
    <hr class=\"line\">
    <span>Ou</span>
    <hr class=\"line\">
  </div>
  <button title=\"Sign Up\" type=\"submit\" class=\"sign-in_apl\">

    <span>Créer un compte</span>
  </button>
  <p class=\"note\">Terms of use &amp; Conditions</p>
</form></div>";
}

function personnelCard($id): void
{
    $personnel = getPersonnelById($id)[0];
    echo "<div class='personnel-icon'>
        <img src='../image/fetchimage.jpg' alt=''>
        <div class='personnel-text'>
        <p>".strtoupper($personnel["nom_personnel"])."
".ucfirst($personnel["prenom_personnel"])."</p>
        <hr class='line'>
        <p>".$personnel["poste_personnel"]."</p>
        </div>
</div>";
}