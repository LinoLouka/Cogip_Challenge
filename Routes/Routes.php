<?php

namespace App\Routes;

use Bramus\Router\Router;
use App\Controllers\HomeController;
use App\Controllers\ControllerInvoices;


$router = new Router();

$router->get('/', function() {
    (new ControllerInvoices)->index();
});
$router->get('/', function() {
    (new ControllerContacts)->index();
});
$router->get('/', function() {
    (new ControllerCompanies)->index();
});

if (file_exists(__FILE__.'/Controllers')){
    require_once($router);
} else {
    require_once(__ROOT__.'/Resources/views/404.php');
}

$router->run();