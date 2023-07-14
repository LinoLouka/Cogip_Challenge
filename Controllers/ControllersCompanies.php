<?php
namespace App\Controllers;

use App\Core\Controller;
use App\Models\Companies;

Class ControllersCompanies extends Controller
{

    public function show()
    {
        $modelCompanies = new Companies();

        $totalRecords = $modelCompanies->countCompanies();
        $perPage = 5;
        $currentPage = $_GET['page'] ?? 1;

        $startIndex = ($currentPage -1) * $perPage;
        $companies = $modelCompanies->getCompaniesWithPagination($startIndex, $perPage);

        $pagination = $this->paginate($totalRecords, $currentPage, $perPage);

        return $this->view('companies',[
            'companies' => $companies,
            'pagination' => $pagination,
        ]);
    }
    public function showId($id)
    {

        $modelCompanies = new Companies();

        $companies = $modelCompanies->Id($id);

        $data = [
            'tva' => $companies['tva'],
            'type_id' => $companies['type_id'],
            'name' => $companies['name'],
            'country' => $companies['country'],
            'created_at' => $companies['created_at']
        ];

       return $this->view('show_company', $data);
    }
    private function paginate($totalRecords, $currentPage, $perPage)
    {
        $totalPages = ceil($totalRecords / $perPage);

        if ($currentPage < 1) {
            $currentPage = 1;
        } elseif ($currentPage > $totalPages) {
            $currentPage = $totalPages;
        }

        $startIndex = ($currentPage - 1) * $perPage;
        $endIndex = min($startIndex + $perPage - 1, $totalRecords - 1);

        return [
            'totalRecords' => $totalRecords,
            'totalPages' => $totalPages,
            'currentPage' => $currentPage,
            'startIndex' => $startIndex,
            'endIndex' => $endIndex,
        ];
    }


}


?>