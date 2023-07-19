<?php

namespace App\Models;

use App\Core\connect;

class Contacts
{
    private $bdd;

    public function __construct()
    {
        // Initialize database connection
        $this->bdd = connect::getconnectBdd();
    }

    // Retrieves the last contacts according to a given limit
    public function getLastContacts($limit)
    {

        $request = 'SELECT * FROM contacts ORDER BY created_at ASC LIMIT :limit';
        $statement = $this->bdd->prepare($request);
        $statement->bindValue(':limit', $limit, \PDO::PARAM_INT);
        $statement->execute();

        return $contacts = $statement->fetchAll(\PDO::FETCH_ASSOC);
    }

    // Display all contacts
    public function showContact()
    {

        $request = 'SELECT * FROM contacts ORDER BY created_at;';
        $statement = $this->bdd->prepare($request);
        $statement->execute();

        $contacts = $statement->fetchAll(\PDO::FETCH_ASSOC);
        return $contacts;
    }

    // Retrieves contact information by ID
    public function Id($id)
    {
        $request = "SELECT contacts.*, companies.name AS company_name 
        FROM contacts
        LEFT JOIN companies ON contacts.company_id = companies.id
        WHERE contacts.id = :id";
        $statement = $this->bdd->prepare($request);
        $statement->bindValue(':id', $id, \PDO::PARAM_INT);
        $statement->execute();

        return $statement->fetch(\PDO::FETCH_ASSOC);
    }

    // Retrieves contacts with pagination by specifying a starting index and the number of contacts per page
    public function getContactsWithPagination($startIndex, $perPage)
    {
        $request = 'SELECT * FROM contacts ORDER BY created_at ASC LIMIT :startIndex, :perPage';
        $statement = $this->bdd->prepare($request);
        $statement->bindValue(':startIndex', $startIndex, \PDO::PARAM_INT);
        $statement->bindValue(':perPage', $perPage, \PDO::PARAM_INT);
        $statement->execute();

        return $contacts = $statement->fetchAll(\PDO::FETCH_ASSOC);
    }

    // Count the total number of contacts in the database
    public function countContacts()
    {
        $request = 'SELECT COUNT(*) as total FROM contacts';
        $statement = $this->bdd->prepare($request);
        $statement->execute();

        $result = $statement->fetch(\PDO::FETCH_ASSOC);

        return $result['total'];
    }

    // Adds a new contact to the database with a name, phone number and e-mail address
    public function addContacts($name, $phone, $email)
    {
        $request = 'INSERT INTO contacts (name, phone, email) VALUES (:name, :phone, :email)';
        $statement = $this->bdd->prepare($request);
        $statement->bindValue(':name', $name, \PDO::PARAM_STR);
        $statement->bindValue(':phone', $phone, \PDO::PARAM_STR);
        $statement->bindValue(':email', $email, \PDO::PARAM_STR);
        $statement->execute();

        $result = $statement->execute();
    }

    // Modify an existing contact by specifying the contact ID, a new name and/or a new phone number
    public function editContacts($id, $name, $contactPhone)
    {
        if ($name == null) {
            // If name is null, updates only the contact's phone number
            $request = 'UPDATE contacts SET phone = :contactPhone WHERE id = :id';

            $statement = $this->bdd->prepare($request);
            $statement->bindValue(':contactPhone', $contactPhone, \PDO::PARAM_STR);
            $statement->bindValue(':id', $id, \PDO::PARAM_INT);
            $statement->execute();
            return;
        }
        if ($contactPhone == null) {
            // If phone number is null, updates contact name only
            $request = 'UPDATE contacts SET name = :name WHERE id = :id';

            $statement = $this->bdd->prepare($request);
            $statement->bindValue(':name', $name, \PDO::PARAM_STR);
            $statement->bindValue(':id', $id, \PDO::PARAM_INT);
            $statement->execute();
            return;
        }
        if ($name && $contactPhone) {
            // If name and phone number are specified, updates both
            $request = 'UPDATE contacts SET name = :name, phone = :contactPhone WHERE id = :id';

            $statement = $this->bdd->prepare($request);
            $statement->bindValue(':name', $name, \PDO::PARAM_STR);
            $statement->bindValue(':contactPhone', $contactPhone, \PDO::PARAM_STR);
            $statement->bindValue(':id', $id, \PDO::PARAM_INT);
            $statement->execute();
            return;
        }
    }

    // Delete a contact based on its ID
    public function deleteContacts($id)
    {

        $request = 'DELETE FROM contacts WHERE id = :id';
        $statement = $this->bdd->prepare($request);
        $statement->bindValue(':id', $id, \PDO::PARAM_INT);
        $statement->execute();
    }

}
