<?php

namespace App\Core;

use PDO;

class connect
{
    private static $bdd;

    // Establish a database connection and return the PDO object
    public static function getConnectBdd()
    {

        try {
            // Create a new PDO instance with the database credentials
            $bdd = new PDO('mysql:dbname=cogip;host=localhost;charset=utf8', 'root');
            return $bdd;
        } catch (Exception $e) {
            // In case of an error, display the error message and stop the execution
            die('Erreur : ' . $e->getMessage());
        }
    }
}
