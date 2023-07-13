<?php
namespace App\Controllers;

use App\Core\Controller;

class authController extends Controller 
{

    public function index()
    {
        return $this->view('register',[
            "name" => "cogip"
        ]);
    }

    // public function register()
    // {
    //     $name = $_POST['name'];
    //     $email =$_POST['email'];
    //     $password = $_POST['password'];
    //     $role = $_POST['role'];

    //     $userModel = new User();

    //     // A finir

    // }
}
?>