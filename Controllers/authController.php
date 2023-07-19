<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Models\User;

class authController extends Controller
{
    public function index()
    {
        // Display the registration view with data
        return $this->view('register', [
            "name" => "cogip"
        ]);
    }

    public function register()
    {
        // Retrieve form data
        $firstname = filter_var($_POST['firstname'], FILTER_SANITIZE_STRING);
        $lastname = filter_var($_POST['lastname'], FILTER_SANITIZE_STRING);
        $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
        $password = $_POST['password'];
        $confirmPassword = $_POST['confirmPassword'];

        // Validate form inputs
        $lastnameError = $this->validateLastname($lastname);
        $firstnameError = $this->validateFirstname($firstname);
        $addressEmailError = $this->validateEmail($email);
        $passwordError = $this->validatePassword($password);
        $confirmPasswordError = $this->verifyPassword($password, $confirmPassword);
        $message = "Please enter right informations";
        $link = "";

        // Process registration if the form is submitted and all validations pass
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && empty($lastnameError) && empty($firstnameError) && empty($addressEmailError) && empty($passwordError) && empty($confirmPasswordError)) {
            $userModel = new User();
            $userModel->saveUser($firstname, $lastname, $email, $password);
            $userModel->getUsersRoles();
            $message = 'You are now register, please return to login';
            $link= '<a href="login">Go to login</a>';
        }

        // Render the registration view with form data and error messages
        return $this->view(
            'register',
            [
            'lastname' => $lastname,
            'firstname' => $firstname,
            'adresseMail' => $email,
            'password' => $password,
            'confirmPassword' => $confirmPassword,
            'lastnameError' => $lastnameError,
            'firstnameError' => $firstnameError,
            'addressEmailError' => $addressEmailError,
            'passwordError' => $passwordError,
            'confirmPasswordError' => $confirmPasswordError,
            'link' => $link,
            'message' => $message
        ]
        );
    }

    // This method validates the password field
    private function validatePassword($password)
    {
        if(empty($password)) {
            return "The password is required";
        };
        $minLength = 8;
        if(strlen($password) < $minLength) {
            return "The password must be a least $minLength characters long";
        }
    }

    // This method verifies that the password and confirm password fields match
    private function verifyPassword($password, $confirmPassword)
    {
        if($password !== $confirmPassword) {
            return  "The passwords aren't the same!";
        }
    }

    // This method validates the lastname field
    private function validateLastname($lastname)
    {
        if (empty($lastname)) {
            return "The lastname is required";
        }
        $minLength = 2;
        if (strlen($lastname) < $minLength) {
            return "The lastname must be at least $minLength characters long";
        }
        return "";
    }

    // This method validates the firstname field
    private function validateFirstname($firstname)
    {
        if (empty($firstname)) {
            return "The firstname is required";
        }
        $minLength = 2;
        if (strlen($firstname) < $minLength) {
            return "The firstname must be at least $minLength characters long";
        }
        return "";
    }

    // This method validates the email field
    private function validateEmail($email)
    {
        if (empty($email)) {
            return "The email is required";
        }
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return "The format email isn't valid";
        }
        return "";

    }

}
