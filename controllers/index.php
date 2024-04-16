<?php

$title = "Favola Pizza - Neka svaki zalogaj bude bajka!";
$meta_description = "Gladni ste? Poručite iz picerije Favola i dobijate dostavu do 35 minuta! Uživaćete u ukusima naših pica, tortilja, pirošaka, palačinaka i obroka.";
$meta_title = "Favola Pizza - Neka svaki zalogaj bude bajka!";
$og_title = "Favola Pizza - Neka svaki zalogaj bude bajka!";
$og_url = "https://www.favola.rs";
$og_image = "https://www.favola.rs/images/cover.webp";
$og_description = "Gladni ste? Poručite iz picerije Favola i dobijate dostavu do 35 minuta! Uživaćete u ukusima naših pica, tortilja, pirošaka, palačinaka i obroka.";
$og_image_alt = "Razna hrana";
$preload_cover_image = "";
$footer_title_html_raw = "<h1> Favola Pizza</h1>";
// $image_path_array = [
//     'pice-margarita' => 'images/pice/margarita/margarita',
//     'pice-fungi' => 'images/pice/fungi/fungi',
// ];

require 'helpers.php'; // assuming you have defined your function in helpers.php

// $image_path_array = [
//     'pice-margarita' => 'images/pice/margarita/margarita',
// ];
$image_path_array = [
    'pice-margarita' => 'images/pice/margarita/margarita',
    'pice-fungi' => 'images/pice/fungi/fungi',
    'pice-vesuvio' => 'controllers/uslovi-koriscenja.php',
    '/robots.txt'=> 'robots.txt',
];

require "views/index.view.php";