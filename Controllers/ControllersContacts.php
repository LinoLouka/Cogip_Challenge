<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Models\Contacts;

class ControllersContacts extends Controller
{

    public function show()
    {
        $modelContact = new Contacts();

        $contacts = $modelContact->showContact();

        return $this->view('contacts', [
            'contacts' => $contacts,
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
}
