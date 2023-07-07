<?php
namespace App\Models;

use App\Core\connect;

class Companies{

    private $bdd;

    public function __construct(){

        $this->bdd = connect::getconnectBdd();
    } 

    public function getLastCompanies($limit){

        $request = 'SELECT * FROM companies ORDER BY created_at ASC LIMIT :limit';
        $statement = $this->bdd->prepare($request);
        $statement->bindValue(':limit', $limit, \PDO::PARAM_INT);
        $statement->execute();

        return $companies = $statement->fetchAll(\PDO::FETCH_ASSOC);
    }


}

?>