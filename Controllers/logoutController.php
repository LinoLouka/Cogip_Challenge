<?php
namespace App\Controllers;

use App\Core\Controller;
use App\Models\User;

class logoutController extends Controller 
{
    public function logout(){
        session_start();
        session_unset();
        session_destroy();

        header('location: home');
        exit();
    }
}



?>