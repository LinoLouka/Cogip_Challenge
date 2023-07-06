<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Models\Contacts;

Class Contact extends Controller
{

    public function index()
    {
        $modelContact = new Contact();

        $contacts = $modelContact->getLastContacts(5);

        return $this->view('contacts',[
            'contacts' => $contacts,
        ]);
    }
}

?>