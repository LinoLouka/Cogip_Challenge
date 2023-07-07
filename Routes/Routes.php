<?php

namespace App\Routes;

use Bramus\Router\Router;
use App\Controllers\HomeController;
use App\Controllers\ControllersInvoices;
use App\Controllers\ControllersContacts;


$router = new Router();

$router->get('/', function() {
    (new HomeController)->index();
});
$router->get('/invoices', function() {
    (new ControllersInvoices)->index();
});
$router->get('/contacts', function() {
    (new ControllersContacts)->index();
});
// $router->get('/companies', function() {
//     (new ControllersCompanies)->index();
// });

if (file_exists(__FILE__.'/Controllers')){
    require_once($router);
} else {
    require_once(__ROOT__.'/Resources/views/404.php');
}

$router->run();