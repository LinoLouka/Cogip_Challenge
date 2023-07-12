<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Models\Invoices;
use App\Models\Contacts;
use App\Models\Companies;
use App\Resources\views\dashboard;

class dashboardController extends Controller
{
    public function index()
    {
        $modelInvoice = new Invoices();
        $modelContact = new Contacts();
        $modelCompanies = new Companies();

        $invoices = $modelInvoice->getLastInvoice(5);
        $contacts = $modelContact->getLastContacts(5);
        $companies = $modelCompanies->getLastCompanies(5);

        return $this->view('dashboard', [
            "name" => "Cogip",
            "invoices" => $invoices,
            "contacts"  => $contacts,
            "companies" => $companies
        ]);

    }
    public function addInvoice()
    {
        $modelInvoices = new Invoices();
        if(isset($_POST['validationInvoice'])) {
            $id_company = $_POST['invoicesNumber'];
            $name = $_POST['invoicesCompany'];
            $message = $modelInvoices->Add($id_company, $name);
        }

    }

    public function addCompanies()
    {
        $modelCompanies = new Companies();
        if (isset($_POST['validationCompany'])) {
            $name = $_POST['companyName'];
            $type = $_POST['companyType'];
            $country = $_POST['companyCountry'];
            $tva = $_POST['companyTVA'];
            $message = $modelCompanies->Add($name, $type, $country, $tva);
        }
    }

    public function addContact()
    {
        $modelContacts = new Contacts();
        if(isset($_POST['validationContact'])) {
            $name = $_POST['contactName'];
            $phone = $_POST['contactPhone'];
            $email = $_POST['contactMail'];
            $company_id = $_POST['contactCompanyId'];
            $message = $modelContacts($name, $phone, $email, $company_id);
        }

    }
    public function editInvoice()
    {
        if (isset($_POST['editInvoice'])) {
            $id = $_POST['editInvoice'];
            $id_company = $_POST['id_company'][$id];
            $name = $_POST['invoiceName'][$id];

            $modelInvoice = new Invoices();
            $modelInvoice->editInvoices($id, $id_company, $name);
        }
    }
    public function editContact()
    {
        if (isset($_POST['editContact'])) {
            $id = $_POST['editContact'];
            $name = $_POST['contactName'][$id];
            $company_id = $_POST['contactCompanyId'][$id];

            $modelContact = new Contacts();
            $modelContact->editContacts($id, $name, $company_id);
        }
    }
    public function editCompany()
    {
        if (isset($_POST['editCompany'])) {
            $id = $_POST['editCompany'];
            $name = $_POST['companyName'][$id];

            $modelCompany = new Companies();
            $modelCompany->editCompanies($id, $name);
        }
    }


}
