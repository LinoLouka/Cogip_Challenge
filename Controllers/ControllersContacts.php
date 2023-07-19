<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Models\Contacts;

class ControllersContacts extends Controller
{
    // The show method displays a paginated list of contacts
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

    // The showId method displays details of a specific contact by ID
    public function showId($id)
    {

        $modelContacts = new Contacts();

        $contacts = $modelContacts->Id($id);

        // Prepare the data to be passed to the 'show_contact' view
        $data = [
            'company_id' => $contacts['company_id'],
            'email' => $contacts['email'],
            'name' => $contacts['name'],
            'phone' => $contacts['phone'],
            'created_at' => $contacts['created_at']
        ];

        // Render the 'show_contact' view with the contact data
        return $this->view('show_contact', $data);
    }

    // This method generates pagination data based on total records, current page, and items per page
    private function paginate($totalRecords, $currentPage, $perPage)
    {
        $totalPages = ceil($totalRecords / $perPage);

        if ($currentPage < 1) {
            $currentPage = 1;
        } elseif ($currentPage > $totalPages) {
            $currentPage = $totalPages;
        }

        // Calculate the start and end index for the current page's contacts
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
