<?php
namespace App\Models;

use App\Core\connect;

class Contact{

    private $bdd;

    public function __construct(){

        $this->bdd = connect::getconnectBdd();
    } 

    public function getLastContacts($limit){

        $request = 'SELECT * FROM contacts ORDER BY created_at ASC LIMIT :limit';
        $statement = $this->bdd->prepare($request);
        $statement->bindValue(':limit', $limit, \PDO::PARAM_INT);
        $statement->execute();

        $invoiceArticle = $statement->fetchAll(\PDO::FETCH_ASSOC);
    }


}

?>