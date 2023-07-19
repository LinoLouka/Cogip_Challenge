<?php
namespace App\Controllers;

use App\Core\Controller;
use App\Models\Invoices;

class ControllersInvoices extends Controller
{
    public function show()
    {
        $modelInvoice = new Invoices();

        $totalRecords = $modelInvoice->countInvoices();
        $perPage = 5;
        $currentPage = $_GET['page'] ?? 1;

        $startIndex = ($currentPage - 1) * $perPage;
        $invoices = $modelInvoice->getInvoicesWithPagination($startIndex, $perPage);

        $pagination = $this->paginate($totalRecords, $currentPage, $perPage);

        return $this->view('invoices', [
            'invoices' => $invoices,
            'pagination' => $pagination,
        ]);
    }


    public function showId($id)
    {
        $modelInvoice = new Invoices();
        $invoices = $modelInvoice->Id($id);

        $data = [
            'id' => $invoices['id'],
            'name' => $invoices['name'],
            'id_company' => $invoices['id_company'],
            'created_at' => $invoices['created_at'],
            'updated_at' => $invoices['updated_at'],
        ];

        return $this->view('show_invoice', $data);
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

