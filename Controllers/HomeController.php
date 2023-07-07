<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Models\Invoices;
use App\Models\Contacts;

class HomeController extends Controller
{
    /*
    * return view
    */
    public function index()
    {

        $modelInvoice = new Invoices();
        $modelContact = new Contacts();

        $invoices = $modelInvoice->getLastInvoice(5);
        $contacts = $modelContact->getLastContacts(5);

        return $this->view('welcome',[
            "name" => "Cogip",
            "invoices" => $invoices,
            "contacts"  => $contacts
        ]);
    }
}