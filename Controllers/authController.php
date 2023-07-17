<?php
namespace App\Controllers;

use App\Core\Controller;
use App\Models\User;

class authController extends Controller 
{

    public function index()
    {
        return $this->view('register',[
            "name" => "cogip"
        ]);
    }

    public function register()
    {
        $firstname = filter_var($_POST['firstname'], FILTER_SANITIZE_STRING);
        $lastname = filter_var($_POST['lastname'], FILTER_SANITIZE_STRING);  
        $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
        $password = $_POST['password'];   

        $userModel = new User();

        $userModel->saveUser($firstname, $lastname, $email, $password);
        $userModel->getUsersRoles();

    }
}
?>