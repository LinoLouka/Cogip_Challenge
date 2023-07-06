<?php

namespace App\Routes;

use Bramus\Router\Router;
use App\Controllers\HomeController;
use App\Controllers\Controller404;

$router = new Router();

$router->get('/', function() {
    (new HomeController)->index();
});

$router->get('/404', function(){
    (new Controller404)->index();
});

$router->run();