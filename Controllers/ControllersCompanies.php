<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Models\Companies;

Class ControllersCompanies extends Controller
{

    public function index()
    {
        $modelCompanies = new Contact();

        $companies = $modelCompanies->getLastContacts();

        return $this->view('companies',[
            'companies' => $companies,
        ]);
    }
}

?>