<?php

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
     '/' => 'controllers/index.controller.php',
     '/politika-privatnosti' => 'controllers/politika-privatnosti.controller.php',
     '/uslovi-koriscenja' => 'controllers/uslovi-koriscenja.controller.php',
     '/robots.txt'=> 'robots.txt',
];

function routeToController ($uri, $routes) {
     if (array_key_exists($uri, $routes)) {
         require $routes[$uri];
     } else{
         abort ();
     }
    }

function abort($code = 404) {
    http_response_code($code);
    require "views/{code}.php";
    die();
}

routeToController($uri, $routes);