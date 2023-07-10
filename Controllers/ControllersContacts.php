<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Models\Contacts;

class ControllersContacts extends Controller
{

    public function index()
    {
        $modelContact = new Contacts();

        $contacts = $modelContact->getLastContacts(5);

        return $this->view('contacts', [
            'contacts' => $contacts,
        ]);
    }

    public function show(){
        $contacts = $modelContact->showContact();

        return $this->view('contacts', [
            'contacts' => $contacts,
        ]);
    }
}
