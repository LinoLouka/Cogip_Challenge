<?php
namespace App\Models;

use App\Core\connect;

class Invoice{

    private $bdd;

    public function __construct(){

        $this->bdd = connect::getconnectBdd();
    } 

    public function getLastInvoice($limit){

        $request = 'SELECT * FROM invoices ORDER BY created_at DESC LIMIT :limit';
        $statement = $this->bdd->prepare($request);
        $statement->bindValue(':limit', $limit, \PDO::PARAM_INT);
        $statement->execute();

        $invoiceArticle = $statement->fetchAll(\PDO::FETCH_ASSOC);
    }


}

?>