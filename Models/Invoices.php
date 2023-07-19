<?php

namespace App\Models;

use App\Core\connect;

class Invoices
{
    private $bdd;

    public function __construct()
    {
        // Initialize the database connection
        $this->bdd = connect::getConnectBdd();
    }

    // Get the last invoices based on a given limit
    public function getLastInvoice($limit)
    {
        $request = 'SELECT * FROM invoices ORDER BY created_at DESC LIMIT :limit';
        $statement = $this->bdd->prepare($request);
        $statement->bindValue(':limit', $limit, \PDO::PARAM_INT);
        $statement->execute();

        return $invoices = $statement->fetchAll(\PDO::FETCH_ASSOC);
    }

    // Show all invoices
    public function showInvoices()
    {

        $request = 'SELECT * FROM invoices';
        $statement = $this->bdd->prepare($request);
        $statement->execute();

        return $invoices = $statement->fetchAll(\PDO::FETCH_ASSOC);
    }

    // Get invoice information based on its ID
    public function Id($id)
    {
        $request = "SELECT invoices.*, companies.name AS company_name FROM invoices 
        LEFT JOIN companies ON invoices.id_company = companies.id 
        WHERE invoices.id = :id";
        $statement = $this->bdd->prepare($request);
        $statement->bindValue(':id', $id, \PDO::PARAM_INT);
        $statement->execute();

        return $statement->fetch(\PDO::FETCH_ASSOC);
    }

    // Get invoices with pagination by specifying the starting index and the number of invoices per page
    public function getInvoicesWithPagination($startIndex, $perPage)
    {
        $request = 'SELECT * FROM invoices ORDER BY created_at ASC LIMIT :startIndex, :perPage';
        $statement = $this->bdd->prepare($request);
        $statement->bindValue(':startIndex', $startIndex, \PDO::PARAM_INT);
        $statement->bindValue(':perPage', $perPage, \PDO::PARAM_INT);
        $statement->execute();

        return $invoices = $statement->fetchAll(\PDO::FETCH_ASSOC);
    }

    // Count the total number of invoices in the database
    public function countInvoices()
    {
        $request = 'SELECT COUNT(*) as total FROM invoices';
        $statement = $this->bdd->prepare($request);
        $statement->execute();

        $result = $statement->fetch(\PDO::FETCH_ASSOC);

        return $result['total'];
    }

    // Add a new invoice to the database with a company ID and a name
    public function addInvoices($id_company, $name)
    {
        $request = 'INSERT INTO invoices (name, id_company, created_at) VALUES (:name, :id_company, now())';
        $statement = $this->bdd->prepare($request);
        $statement->bindValue(':name', $name, \PDO::PARAM_STR);
        $statement->bindValue(':id_company', $id_company, \PDO::PARAM_INT);
        $result = $statement->execute();
        return $result;
    }

    // Edit an existing invoice by specifying its ID, company ID, and/or name
    public function editInvoices($id, $id_company, $name)
    {
        if($id_company == null) {
            // If the company ID is null, only update the company ID of the invoice
            $request = 'UPDATE invoices SET id_company=:id_company WHERE id=:id';
            $statement = $this->bdd->prepare($request);
            $statement->bindValue(':id_company', $id_company, \PDO::PARAM_STR);
            $statement->bindValue(':id', $id, \PDO::PARAM_INT);
            $statement->execute();
            return;
        }

        if($name == null) {
            // If the name is null, only update the name of the invoice
            $request = 'UPDATE invoices SET name=:name WHERE id=:id';
            $statement = $this->bdd->prepare($request);
            $statement->bindValue(':name', $name, \PDO::PARAM_STR);
            $statement->bindValue(':id', $id, \PDO::PARAM_INT);
            $statement->execute();
            return;

        }


        if ($name && $id_company) {
            // If both name and company ID are specified, update both
            $request = 'UPDATE invoices SET id_company=:id_company, name=:name WHERE id=:id';
            $statement = $this->bdd->prepare($request);
            $statement->bindValue(':id_company', $id_company, \PDO::PARAM_INT);
            $statement->bindValue(':name', $name, \PDO::PARAM_STR);
            $statement->bindValue(':id', $id, \PDO::PARAM_INT);
            $statement->execute();
            return;
        }

    }

    // Delete an invoice based on its ID
    public function deleteInvoices($id)
    {

        $request = 'DELETE FROM invoices WHERE id = :id';
        $statement = $this->bdd->prepare($request);
        $statement->bindValue(':id', $id, \PDO::PARAM_INT);
        $statement->execute();
    }
}
