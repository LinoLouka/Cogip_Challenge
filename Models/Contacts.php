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
        $request = "SELECT contacts.id, contacts.name, contacts.email, companies.name AS company_name 
              FROM contacts
              LEFT JOIN companies ON contacts.company_id = companies.id
              WHERE contacts.id = :id";
        $statement = $this->bdd->prepare($request);
        $statement->bindValue(':id', $id, \PDO::PARAM_INT);
        $statement->execute();

        return $contacts = $statement->fetch(\PDO::FETCH_ASSOC);
    }

    public function getContactsWithPagination($startIndex, $perPage)
    {
        $request = 'SELECT * FROM contacts ORDER BY created_at ASC LIMIT :startIndex, :perPage';
        $statement = $this->bdd->prepare($request);
        $statement->bindValue(':startIndex', $startIndex, \PDO::PARAM_INT);
        $statement->bindValue(':perPage', $perPage, \PDO::PARAM_INT);
        $statement->execute();

        return $contacts = $statement->fetchAll(\PDO::FETCH_ASSOC);
    }
    public function countContacts()
    {
        $request = 'SELECT COUNT(*) as total FROM contacts';
        $statement = $this->bdd->prepare($request);
        $statement->execute();

        $result = $statement->fetch(\PDO::FETCH_ASSOC);

        return $result['total'];
    }

    public function addContacts($name, $phone, $email)
{
    $request = 'INSERT INTO contacts (name, phone, email) VALUES (:name, :phone, :email)';
    $statement = $this->bdd->prepare($request);
    $statement->bindValue(':name', $name, \PDO::PARAM_STR);
    $statement->bindValue(':phone', $phone, \PDO::PARAM_INT);
    $statement->bindValue(':email', $email, \PDO::PARAM_STR);
    $statement->execute();

    $result = $statement->execute();
}


    public function editContacts($id, $name, $contactPhone)
    {
        $request = 'UPDATE contacts SET name = :name, phone = :contactPhone WHERE id = :id';
        $statement = $this->bdd->prepare($request);
        $statement->bindValue(':name', $name, \PDO::PARAM_STR);
        $statement->bindValue(':contactPhone', $contactPhone, \PDO::PARAM_STR);
        $statement->bindValue(':id', $id, \PDO::PARAM_INT);
        $statement->execute();
    }

    public function deleteContacts($id) {
        
        $request = 'DELETE FROM contacts WHERE id = :id';
        $statement = $this->bdd->prepare($request);
        $statement->bindValue(':id', $id, \PDO::PARAM_INT);
        $statement->execute();
    }

}
