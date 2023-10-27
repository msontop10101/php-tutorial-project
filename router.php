<?php 

$routes = require "routes.php";

$uri = parse_url($_SERVER["REQUEST_URI"])["path"];


function abort($code)
{
    http_response_code($code);

    require "views/{$code}.php";
}
function routesToController($uri, $routes)
{
    if (array_key_exists($uri, $routes)) {
        require $routes[$uri];
    } else {
        abort(404);
    }
}