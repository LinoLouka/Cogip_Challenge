<?php

namespace App\Routes;

use Bramus\Router\Router;
use App\Controllers\HomeController;
use App\Controllers\ControllersInvoices;
use App\Controllers\ControllersContacts;
use App\Controllers\ControllersCompanies;

$router = new Router();

$router->get('/', function () {
    (new HomeController)->index();
});
$router->get('/home', function () {
    (new HomeController)->index();
});
$router->get('/invoices', function() {
    (new ControllersInvoices)->index();
});

$router->get('/contacts', function() {
    (new ControllersContacts)->show();
});
$router->get('/companies', function() {
    (new ControllersCompanies)->index();
});

$router->set404(function() {
    require_once(__ROOT__.'/Resources/views/404.php');
});

$router->run();

