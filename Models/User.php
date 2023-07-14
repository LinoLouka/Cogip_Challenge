<?php

namespace App\Models;

use App\Core\connect;

class User
{
    private $bdd;

    public function __construct()
    {
        $this->bdd = connect::getconnectBdd();
    }

    public function saveUser($role_id, $firstname, $lastname, $email, $password)
    {
            // if($this->isEmailExists($email)) {
            //     return false;
            // }

            $request = 'INSERT INTO users(role_id, first_name, last_name, email, password, created_at, updated_at)
                     VALUES (:role_id, :firstname, :lastname, :email, :password, NOW(), NOW())';
            $statement = $this->bdd->prepare($request);

            // $firstname = filter_var($firstname, FILTER_SANITIZE_STRING);
            // $lastname = filter_var($lastname, FILTER_SANITIZE_STRING);
            // $email = filter_var($email, FILTER_SANITIZE_EMAIL);
            // $password = password_hash($password, PASSWORD_DEFAULT);

            $statement->bindValue(':role_id', $role_id, \PDO::PARAM_INT);
            $statement->bindValue(':firstname', $firstname, \PDO::PARAM_STR);
            $statement->bindValue(':lastname', $lastname, \PDO::PARAM_STR);
            $statement->bindValue(':email', $email, \PDO::PARAM_STR);
            $statement->bindValue(':password', $password, \PDO::PARAM_STR);
            $statement->execute();
    }

    public function getUsersRoles()
    {
            $request = 'SELECT u.id, u.first_name, u.last_name, u.email, r.name AS role_name
                    FROM users u
                    JOIN roles r ON u.role_id = r.id';

            $statement = $this->bdd->prepare($request);
            $statement->execute();

            return $statement->fetchAll(\PDO::FETCH_ASSOC);
    }




    // public function isEmailExists($email)
    // {
    //     $request = 'SELECT COUNT(*) FROM users WHERE email = :email';
    //     $statement =$this->bdd->prepare($request);
    //     $statement->bindValue(':email', $email, \PDO::PARAM_STR);
    //     $statement->execute();
    //     $count = $statement->fetch(PDO::FETCH_COLUMN);

    //     return ($count > 0);
    // }
}
