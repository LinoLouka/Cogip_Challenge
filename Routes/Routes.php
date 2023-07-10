<?php

namespace App\Routes;

use Bramus\Router\Router;
use App\Controllers\HomeController;
use App\Controllers\ControllersInvoices;
use App\Controllers\ControllersContacts;
use App\Controllers\ControllersCompanies;


$router = new Router();

$router->get('/home', function() {
    (new HomeController)->index();
});
$router->get('/invoices', function() {
    (new ControllersInvoices)->show();
});
$router->get('/contacts', function() {
    (new ControllersContacts)->show();
});
$router->get('/companies', function() {
    (new ControllersCompanies)->show();
});
$router->get('/companies/{$id}', function($id) {
    (new ControllersCompanies)->showId($id);
});
$router->get('/contacts/{id}', function($id){
    (new ControllersContacts)->showId($id);
});
$router->get('/invoices/{$id}', function($id) {
    (new ControllersInvoices)->showId($id);
});
if (file_exists(__FILE__.'/Controllers')){
    require_once($router);
} else {
    require_once(__ROOT__.'/Resources/views/404.php');
}

$router->run();