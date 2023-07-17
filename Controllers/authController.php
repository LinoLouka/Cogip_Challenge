<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Models\User;

class authController extends Controller
{
    public function index()
    {
        return $this->view('register', [
            "name" => "cogip"
        ]);
    }

    public function register()
    {
        $firstname = filter_var($_POST['firstname'], FILTER_SANITIZE_STRING);
        $lastname = filter_var($_POST['lastname'], FILTER_SANITIZE_STRING);
        $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
        $password = $_POST['password'];
        $confirmPassword = $_POST['confirm_password'];

        $lastnameError = validateLastname($lastname);
        $firstnameError = validateFirstname($firstname);
        $addressEmailError = validateEmail($email);
        $resultValidatePassword = $this->validatePassword($password);

        if($resultValidatePassword !== true) {
            echo $resultValidatePassword;
            return;
        }

        if(!$this->verifyPassword($password, $confirmPassword)) {
            echo "The passwords aren't the same ! ";
            return;
        }

        $userModel = new User();

        $userModel->saveUser($firstname, $lastname, $email, $password);
        $userModel->getUsersRoles();
    }

    private function validatePassword($password)
    {
        if(empty($password)) {
            return "The password is required";
        };
        $minLength = 8;
        if(strlen($password) < $minLength) {
            return "The password must be a least $minLength characters long";
        }
        return true;
    }

    private function verifyPassword($password, $confirm_password)
    {
        return $password === $confirm_password;
    }
}
