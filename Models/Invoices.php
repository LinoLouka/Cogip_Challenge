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

        return $invoices = $statement->fetchAll(\PDO::FETCH_ASSOC);
    }
    public function showInvoices(){
        $request = 'SELECT * FROM invoices';
        $statement = $this->bdd->prepare($request);
        $statement->execute();

        return $invoices = $statement->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function Id($id)
    {
        $request = 'SELECT * FROM invoices WHERE id = :id';
        $statement = $this->bdd->prepare($request);
        $statement->bindValue(':id', $id, \PDO::PARAM_INT);
        $statement->execute();

        return $invoices = $statement->fetch(\PDO::FETCH_ASSOC);
    }
}

?>