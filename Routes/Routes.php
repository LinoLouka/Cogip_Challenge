<?php

namespace App\Routes;

use Bramus\Router\Router;
use App\Controllers\HomeController;
use App\Controllers\ControllerInvoices;


$router = new Router();
// $test = $router->get('/', function() {
//     (new HomeController)->index();
// });

$test = $router->get('/', function() {
    (new ControllerInvoices)->index();
});

if (file_exists(__FILE__.'/Controllers')){
    require_once($test);
} else {
    require_once(__ROOT__.'/Resources/views/404.php');
}

$router->run();