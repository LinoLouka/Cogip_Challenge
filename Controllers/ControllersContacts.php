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
}
