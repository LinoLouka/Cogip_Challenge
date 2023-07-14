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
    public function showCompanies(){
        $request = 'SELECT * FROM companies';
        $statement = $this->bdd->prepare($request);
        $statement->execute();
        return $companies = $statement->fetchAll(\PDO::FETCH_ASSOC);
    }
    public function Id($id)
    {
        $request = 'SELECT * FROM companies WHERE id = :id';
        $statement = $this->bdd->prepare($request);
        $statement->bindValue(':id', $id, \PDO::PARAM_INT);
        $statement->execute();

        return $companies = $statement->fetch(\PDO::FETCH_ASSOC);
    }


}

?>