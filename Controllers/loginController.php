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
    $email = $_POST['email'];
    $password = $_POST['password'];

    $usermodel = new User();

    $User = $usermodel->checkUser($email, $password);

    if ($User) {
        $data = [
            'id' => $User['id'],
            'firstname' => $User['first_name'],
            'lastname' => $User['last_name'],
            'email' => $User['email'],
            'role' => $User['role_name']
        ];

        $_SESSION['user_id'] = $User['id'];
        $_SESSION['user_role'] = $User['role_name'];
        $_SESSION['first_name'] = $User['first_name'];

        header('location: '.__ROOT__.'/home');
        exit();
    } else {
        $data = ['error' => 'Unknown User'];
        return $this->view('login', $data);
    }
}

        public function checkSession($location){
            if (isset($_SESSION['user_id']) && isset($_SESSION['user_role'])){
                echo 'you are connected';
            }else{
                exit();
            }
        }
}


?>
