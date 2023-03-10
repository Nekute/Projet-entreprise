<?php
function card($titre, $prix/*$note*/, $img): void
{
    echo "<div class=\"card\">
    <div class=\"image\">
        <img src=\"$img\" alt=\"\">
    </div>
    <div class=\"titre\">
        <h3>$titre</h3>
    </div>
    <div class=\"prix\">
        <p>$prix €</p>
    </div>
    <div class=\"note\">
        <svg class='star' data-name=\"Layer 1\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 122.88 117.19\"><title>black-star</title><path d=\"M64.39,2,80.11,38.76,120,42.33a3.2,3.2,0,0,1,1.83,5.59h0L91.64,74.25l8.92,39a3.2,3.2,0,0,1-4.87,3.4L61.44,96.19,27.09,116.73a3.2,3.2,0,0,1-4.76-3.46h0l8.92-39L1.09,47.92A3.2,3.2,0,0,1,3,42.32l39.74-3.56L58.49,2a3.2,3.2,0,0,1,5.9,0Z\"></path></svg>
        <svg class='star' data-name=\"Layer 1\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 122.88 117.19\"><title>black-star</title><path d=\"M64.39,2,80.11,38.76,120,42.33a3.2,3.2,0,0,1,1.83,5.59h0L91.64,74.25l8.92,39a3.2,3.2,0,0,1-4.87,3.4L61.44,96.19,27.09,116.73a3.2,3.2,0,0,1-4.76-3.46h0l8.92-39L1.09,47.92A3.2,3.2,0,0,1,3,42.32l39.74-3.56L58.49,2a3.2,3.2,0,0,1,5.9,0Z\"></path></svg>
        <svg class='star' data-name=\"Layer 1\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 122.88 117.19\"><title>black-star</title><path d=\"M64.39,2,80.11,38.76,120,42.33a3.2,3.2,0,0,1,1.83,5.59h0L91.64,74.25l8.92,39a3.2,3.2,0,0,1-4.87,3.4L61.44,96.19,27.09,116.73a3.2,3.2,0,0,1-4.76-3.46h0l8.92-39L1.09,47.92A3.2,3.2,0,0,1,3,42.32l39.74-3.56L58.49,2a3.2,3.2,0,0,1,5.9,0Z\"></path></svg>
        <svg class='star' data-name=\"Layer 1\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 122.88 117.19\"><title>black-star</title><path d=\"M64.39,2,80.11,38.76,120,42.33a3.2,3.2,0,0,1,1.83,5.59h0L91.64,74.25l8.92,39a3.2,3.2,0,0,1-4.87,3.4L61.44,96.19,27.09,116.73a3.2,3.2,0,0,1-4.76-3.46h0l8.92-39L1.09,47.92A3.2,3.2,0,0,1,3,42.32l39.74-3.56L58.49,2a3.2,3.2,0,0,1,5.9,0Z\"></path></svg>
        <svg class='star' data-name=\"Layer 1\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 122.88 117.19\"><title>black-star</title><path d=\"M64.39,2,80.11,38.76,120,42.33a3.2,3.2,0,0,1,1.83,5.59h0L91.64,74.25l8.92,39a3.2,3.2,0,0,1-4.87,3.4L61.44,96.19,27.09,116.73a3.2,3.2,0,0,1-4.76-3.46h0l8.92-39L1.09,47.92A3.2,3.2,0,0,1,3,42.32l39.74-3.56L58.49,2a3.2,3.2,0,0,1,5.9,0Z\"></path></svg>
   <p>0</p>
    </div>
</div>";
}

function input($class): void
{
    $oui = explode(" ",$class);
    echo "<div class=\"group\" id=\"".strtolower($oui[0])."\">
                        <input required=\"\" type=\"text\" class=\"input\" name=\"".strtolower($oui[0])."\">
                        <span class=\"bar\"></span>
                        <label for=\"".strtolower($oui[0])."\">$class</label>
                    </div>";
}