<?php

namespace App\Core;

use PDO;


class connect {

private static $bdd;

public static function getConnectBdd()
{

    try {
        $bdd = new PDO('mysql:dbname=cogip;host=localhost;charset=utf8', 'root');
        return $bdd;
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
}
}
?>
