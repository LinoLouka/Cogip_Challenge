<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Models\Companies;

Class ControllerCompanies extends Controller
{

    public function index()
    {
        $modelCompanies = new Contact();

        $companies = $modelCompanies->getLastContacts(5);

        return $this->view('companies',[
            'companies' => $companies,
        ]);
    }
}

?>