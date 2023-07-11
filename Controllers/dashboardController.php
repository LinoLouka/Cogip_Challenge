<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Models\Invoices;
use App\Models\Contacts;
use App\Models\Companies;

class dashboardController extends Controller
{

    public function index(){
        $modelInvoice = new Invoices();
        $modelContact = new Contacts();
        $modelCompanies = new Companies();

        $invoices = $modelInvoice->getLastInvoice(5);
        $contacts = $modelContact->getLastContacts(5);
        $companies = $modelCompanies->getLastCompanies(5);

        return $this->view('dashboard',[
            "name" => "Cogip",
            "invoices" => $invoices,
            "contacts"  => $contacts,
            "companies" => $companies
        ]);

    }
    public function addInvoice()
    {

        
    }
    public function addCompanies($name, $type, $country, $TVA)
    {
        $modelCompanies = new Companies();

        $companies = $modelCompanies->Add($name, $type, $country, $TVA);

    }
    public function addContact()
    {

    }
}   



?>
