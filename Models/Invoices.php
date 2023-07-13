<?php

namespace App\Models;

use App\Core\connect;

class Invoices
{
    private $bdd;

    public function __construct()
    {
        $this->bdd = connect::getConnectBdd();
    }

    public function getLastInvoice($limit)
    {
        $request = 'SELECT * FROM invoices ORDER BY created_at DESC LIMIT :limit';
        $statement = $this->bdd->prepare($request);
        $statement->bindValue(':limit', $limit, \PDO::PARAM_INT);
        $statement->execute();

        return $invoices = $statement->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function showInvoices()
    {
        $request = 'SELECT * FROM invoices';
        $statement = $this->bdd->prepare($request);
        $statement->execute();

        return $invoices = $statement->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function Id($id)
    {
        $request = "SELECT invoices.id, invoices.id_company, companies.name AS company_name 
              FROM invoices 
              LEFT JOIN companies ON invoices.id_company = companies.id 
              WHERE invoices.id = :id";
        $statement = $this->bdd->prepare($request);
        $statement->bindValue(':id', $id, \PDO::PARAM_INT);
        $statement->execute();

        return $invoices = $statement->fetch(\PDO::FETCH_ASSOC);
    }


    public function getInvoicesWithPagination($startIndex, $perPage)
    {
        $request = 'SELECT * FROM invoices ORDER BY created_at ASC LIMIT :startIndex, :perPage';
        $statement = $this->bdd->prepare($request);
        $statement->bindValue(':startIndex', $startIndex, \PDO::PARAM_INT);
        $statement->bindValue(':perPage', $perPage, \PDO::PARAM_INT);
        $statement->execute();

        return $invoices = $statement->fetchAll(\PDO::FETCH_ASSOC);
    }
    
    public function countInvoices()
    {
        $request = 'SELECT COUNT(*) as total FROM invoices';
        $statement = $this->bdd->prepare($request);
        $statement->execute();

        $result = $statement->fetch(\PDO::FETCH_ASSOC);

        return $result['total'];
    }

    public function editInvoices($id, $id_company, $name)
    {
        $request = 'UPDATE invoices SET id_company=:id_company, name=:name WHERE id=:id';
        $statement = $this->bdd->prepare($request);
        $statement->bindValue(':id_company', $id_company, \PDO::PARAM_INT);
        $statement->bindValue(':name', $name, \PDO::PARAM_STR);
        $statement->bindValue(':id', $id, \PDO::PARAM_INT);
        $statement->execute();
    }
}
