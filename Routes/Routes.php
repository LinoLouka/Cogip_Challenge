<?php

namespace App\Routes;

use Bramus\Router\Router;
use App\Controllers\HomeController;


$router = new Router();
$test = $router->get('/', function() {
    (new HomeController)->index();
});



if (file_exists(__ROOT__.'/Controllers')){
    require_once($test);
} else {
    require_once(__ROOT__.'/Resources/views/404.php');
}


$router->run();