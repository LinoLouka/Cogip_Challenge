<?php
namespace App\Models;

use App\Core\connect;

class Contacts
{
    private $bdd;

    public function __construct()
    {

        $this->bdd = connect::getconnectBdd();
    }

    public function getLastContacts($limit)
    {

        $request = 'SELECT * FROM contacts ORDER BY created_at ASC LIMIT :limit';
        $statement = $this->bdd->prepare($request);
        $statement->bindValue(':limit', $limit, \PDO::PARAM_INT);
        $statement->execute();

        return $contacts = $statement->fetchAll(\PDO::FETCH_ASSOC);
    }


    public function showContact()
    {

        $request = 'SELECT * FROM contacts ORDER BY created_at;';
        $statement = $this->bdd->prepare($request);
        $statement->execute();

        $contacts = $statement->fetchAll(\PDO::FETCH_ASSOC);
        return $contacts;
    }
    public function Id($id)
    {
        $request = 'SELECT * FROM contacts WHERE id = :id';
        $statement = $this->bdd->prepare($request);
        $statement->bindValue(':id', $id, \PDO::PARAM_INT);
        $statement->execute();

        return $contacts = $statement->fetch(\PDO::FETCH_ASSOC);
    }
}
?>