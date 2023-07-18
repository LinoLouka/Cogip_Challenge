<?php
namespace App\Controllers;

use App\Core\Controller;
use App\Models\User;

class loginController extends Controller
{
 public function index()
    {
        
        $modelUser = new User();

        return $this->view('login',[
            "name" => "cogip"
        ]);
    }
    public function checkUserEmail()
{
    session_start();
    $emails = $_POST['email'];
    $passwords = $_POST['password'];

    $email = filter_var($emails, FILTER_SANITIZE_EMAIL);
    $password =trim($passwords);

    $usermodel = new User();

    $User = $usermodel->checkUser($email, $password);

    if ($User) {
        $link = '<a href="home">return to menu</a>';
        $_SESSION['user_id'] = $User['id'];
        $_SESSION['user_role'] = $User['role_name'];
        $data = [
            'id' => $User['id'],
            'firstname' => $User['first_name'],
            'lastname' => $User['last_name'],
            'email' => $User['email'],
            'role' => $User['role_name'],
            'user_id' => $_SESSION['user_id'],
            'user_role' => $_SESSION['user_role'],
            'link' => $link
            
        ];

        
        header('location: home');
        exit();
    } else  {
        return $this->view('login');
    }
}
        
}


?>
