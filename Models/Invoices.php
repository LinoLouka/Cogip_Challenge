<?php
namespace App\Models;

use App\Core\connect;

class Invoices
{

    private $bdd;

    public function __construct(){

        $this->bdd = connect::getConnectBdd();
    } 

    public function getLastInvoice($limit){

        $request = 'SELECT * FROM invoices ORDER BY created_at DESC LIMIT :limit';
        $statement = $this->bdd->prepare($request);
        $statement->bindValue(':limit', $limit, \PDO::PARAM_INT);
        $statement->execute();

        $invoices = $statement->fetchAll(\PDO::FETCH_ASSOC);
    }


}

?>