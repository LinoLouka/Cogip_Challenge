<?php

namespace App\Routes;

use Bramus\Router\Router;
use App\Controllers\HomeController;
use App\Controllers\ControllersInvoices;
use App\Controllers\ControllersContacts;
use App\Controllers\ControllersCompanies;
use App\Controllers\dashboardController;
use App\Controllers\authController;
use App\Controllers\loginController;


$router = new Router();

$router->get('/', function () {
    (new HomeController)->index();
});
$router->get('/home', function () {
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
$router->get('/companies/{id}', function($id) {
    (new ControllersCompanies)->showId($id);
});

$router->get('/contacts/{id}', function($id) {
    (new ControllersContacts)->showId($id);
});

$router->get('/invoices/{id}', function($id) {
    (new ControllersInvoices)->showId($id);
});

$router->get('/dashboard', function() {
    (new dashboardController)->index();
    
});

$router->post('/dashboard', function() {
    (new dashboardController)->addCompanies();
    (new dashboardController)->addContact();
    (new dashboardController)->addInvoice();
    (new dashboardController)->editInvoice();
    (new dashboardController)->editContact();
    (new dashboardController)->editCompany();
    (new dashboardController)->deleteCompany();
    (new dashboardController)->deleteInvoice();
    (new dashboardController)->deleteContact();

    (new dashboardController)->index();
});

$router->get('/register', function(){
    (new authController)->index();
});
$router->post('/register', function(){
    (new authController)->register();
    (new loginController)->index();
});
$router->get('/login', function(){
    (new loginController)->index();
});
$router->post('/login', function(){
    (new loginController)->checkUserEmail();
});

$router->set404(function() {
    require_once(__ROOT__.'/Resources/views/404.php');
});

$router->run();

