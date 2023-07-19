<?php

namespace App\Models;

use App\Core\connect;

class Companies
{
    private $bdd;

    public function __construct()
    {
        // Initialize the database connection
        $this->bdd = connect::getconnectBdd();
    }

    // Get the last companies based on a given limit
    public function getLastCompanies($limit)
    {

        $request = 'SELECT * FROM companies ORDER BY id DESC LIMIT :limit';
        $statement = $this->bdd->prepare($request);
        $statement->bindValue(':limit', $limit, \PDO::PARAM_INT);
        $statement->execute();

        return $companies = $statement->fetchAll(\PDO::FETCH_ASSOC);
    }

    // Show all companies
    public function showCompanies()
    {
        $request = 'SELECT * FROM companies';
        $statement = $this->bdd->prepare($request);
        $statement->execute();
        return $companies = $statement->fetchAll(\PDO::FETCH_ASSOC);
    }

    // Get company information based on its ID
    public function Id($id)
    {
        $request = "SELECT companies.*, types.name AS type_name FROM companies 
        LEFT JOIN types ON companies.type_id = types.id 
        WHERE companies.id = :id";
        $statement = $this->bdd->prepare($request);
        $statement->bindValue(':id', $id, \PDO::PARAM_INT);
        $statement->execute();

        return $statement->fetch(\PDO::FETCH_ASSOC);
    }

    // Get companies with pagination by specifying the starting index and the number of companies per page
    public function getCompaniesWithPagination($startIndex, $perPage)
    {
        $request = 'SELECT * FROM companies ORDER BY created_at ASC LIMIT :startIndex, :perPage';
        $statement = $this->bdd->prepare($request);
        $statement->bindValue(':startIndex', $startIndex, \PDO::PARAM_INT);
        $statement->bindValue(':perPage', $perPage, \PDO::PARAM_INT);
        $statement->execute();

        return $invoices = $statement->fetchAll(\PDO::FETCH_ASSOC);
    }

    // Count the total number of companies in the database
    public function countCompanies()
    {
        $request = 'SELECT COUNT(*) as total FROM companies';
        $statement = $this->bdd->prepare($request);
        $statement->execute();

        $result = $statement->fetch(\PDO::FETCH_ASSOC);

        return $result['total'];
    }

    // Add a new company to the database with a name, type, country, and TVA
    public function Add($name, $type, $country, $tva)
    {
        $request = 'INSERT INTO companies (type_id, name, country, tva, created_at) VALUES (:type, :name, :country, :tva, now())';
        $statement = $this->bdd->prepare($request);
        $statement->bindParam(':type', $type);
        $statement->bindParam(':name', $name);
        $statement->bindParam(':country', $country);
        $statement->bindParam(':tva', $tva);

        $result = $statement->execute();
    }

    // Edit an existing company by specifying its ID and a new name
    public function editCompanies($id, $name)
    {
        $request = 'UPDATE companies SET name = :name WHERE id = :id';
        $statement = $this->bdd->prepare($request);
        $statement->bindValue(':name', $name, \PDO::PARAM_STR);
        $statement->bindValue(':id', $id, \PDO::PARAM_INT);
        $statement->execute();
    }

    // Delete a company based on its ID
    public function deleteCompanies($id)
    {

        $request = 'DELETE FROM companies WHERE id = :id';
        $statement = $this->bdd->prepare($request);
        $statement->bindValue(':id', $id, \PDO::PARAM_INT);
        $statement->execute();
    }
}
