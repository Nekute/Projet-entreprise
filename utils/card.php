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
                    <div class=\"description\" onclick='this.parentNode.querySelector(\".descriptionText\").classList.toggle(\"show\")'>
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

function singleArticle($id,$quantite): string
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
                    <form method='post'>
            <button type='submit' name='quantity' value='" . $quantite - 1 . "'><svg data-darkreader-inline-stroke=\"\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.5\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\" aria-hidden=\"true\">
  <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M18 12H6\"></path>
</svg></button></form>
                    <input type=\"text\" id=\"quantity\" name=\"\" value='$quantite'
    oninput=\"this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*)\./g, '$1');\" />
    <form method='post'>
            <button type='submit' name='quantity' value='" . $quantite + 1 . "'><svg data-darkreader-inline-stroke=\"\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.5\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\" aria-hidden=\"true\">
  <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M12 6v12m6-6H6\"></path>
</svg></button></form>
<input type=\"submit\">
</form></div>
                    <a href=\"../singleProduit.php?id=$id\">Ajouter au panier</a>
                    <div class=\"description\" onclick='this.parentNode.querySelector(\".descriptionText\").classList.toggle(\"show\")'>
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