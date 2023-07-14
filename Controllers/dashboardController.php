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
            if($invoiceSpam = $_POST['invoiceSpam']){
                exit();
            }
            $id_company = htmlspecialchars($_POST['invoiceNumber'],ENT_QUOTES, 'UTF-8');
            $name = htmlspecialchars($_POST['invoiceName'],ENT_QUOTES, 'UTF-8');
            $message = $modelInvoices->addInvoices($id_company, $name);
        }
    }
    public function addCompanies()
    {
        $modelCompanies = new Companies();
        if (isset($_POST['validationCompany'])) {
            if($companySpam = $_POST['companySpam']){
                exit();
            }
            $name = htmlspecialchars($_POST['companyName'], ENT_QUOTES, 'UTF-8');
            $type = htmlspecialchars($_POST['companyType'], ENT_QUOTES, 'UTF-8');
            $country = htmlspecialchars($_POST['companyCountry'],ENT_QUOTES, 'UTF-8');
            $tva = htmlspecialchars($_POST['companyTVA'],ENT_QUOTES, 'UTF-8');
            $message = $modelCompanies->Add($name, $type, $country, $tva);
        }
    }

    public function addContact()
    {
        $modelContacts = new Contacts();
        if(isset($_POST['validationContact'])) {
          if($contactSpam = $_POST['contactSpam']){
            exit();
          }
            $name = htmlspecialchars($_POST['contactName'], ENT_QUOTES, 'UTF-8');
            $phone = htmlspecialchars($_POST['contactPhone'], ENT_QUOTES, 'UTF-8');
            $email = filter_var($_POST['contactMail'], FILTER_SANITIZE_EMAIL);
            $message = $modelContacts->addContacts($name, $phone, $email);
        }
    }

    public function editInvoice()
    {
        if (isset($_POST['editInvoice'])) {
            $id = $_POST['editInvoice'];
            $id_company = htmlspecialchars($_POST['id_company'][$id], ENT_QUOTES, 'UTF-8') ?? null;
            $name = htmlspecialchars($_POST['invoiceName'][$id], ENT_QUOTES, 'UTF-8') ?? null;
            if ($id_company== null && $name==null ){
                return;
            }
            $modelInvoice = new Invoices();
            $modelInvoice->editInvoices($id, $id_company, $name);
        }
    }
    public function editContact()
    {
        if (isset($_POST['editContact'])) {
            $id = $_POST['editContact'];
            
            $name = htmlspecialchars($_POST['contactName'][$id],ENT_QUOTES, 'UTF-8') ?? null;
            $contactPhone = htmlspecialchars($_POST['contactPhone'][$id],ENT_QUOTES, 'UTF-8') ?? null;

            if($name == null && $contactPhone == null) {
                return;
            }
            $modelContact = new Contacts();
            $modelContact->editContacts($id, $name, $contactPhone);
        }
    }
    public function editCompany()
    {
        if (isset($_POST['editCompany'])) {
            $id = $_POST['editCompany'];
            $name = htmlspecialchars($_POST['companyName'][$id], ENT_QUOTES, 'UTF-8') ?? null;

            if ($name == null) {
                return;
            }

            $modelCompany = new Companies();
            $modelCompany->editCompanies($id, $name);
        }
    }

    public function deleteInvoice()
    {
        if(isset($_POST['deleteInvoice'])) {
            $id = $_POST['deleteInvoice'];

            $modelInvoice = new Invoices();
            $modelInvoice->deleteInvoices($id);

        }
    }

    public function deleteContact()
    {
        if(isset($_POST['deleteContact'])) {
            $id = $_POST['deleteContact'];

            $modelContact = new Contacts();
            $modelContact->deleteContacts($id);

        }
    }

    public function deleteCompany()
    {
        if(isset($_POST['deleteCompany'])) {
            $id = $_POST['deleteCompany'];

            $modelCompany = new Companies();
            $modelCompany->deleteCompanies($id);

        }
    }

}
