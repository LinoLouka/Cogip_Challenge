
<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Models\Contacts;

class ControllersContacts extends Controller
{
    public function show()
    {
        $modelContact = new Contacts();

        $totalRecords = $modelContact->countContacts();
        $perPage = 5;
        $currentPage = $_GET['page'] ?? 1;

        $startIndex = ($currentPage - 1) * $perPage;
        $contacts = $modelContact->getContactsWithPagination($startIndex, $perPage);

        $pagination = $this->paginate($totalRecords, $currentPage, $perPage);

        return $this->view('contacts', [
            'contacts' => $contacts,
            'pagination' => $pagination,
        ]);
    }
    public function showId($id)
    {

        $modelContacts = new Contacts();

        $contacts = $modelContacts->Id($id);

        $data = [
            'company_id' => $contacts['company_id'],
            'email' => $contacts['email'],
            'name' => $contacts['name'],
            'phone' => $contacts['phone'],
            'created_at' => $contacts['created_at']
        ];

        return $this->view('show_contact', $data);
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

