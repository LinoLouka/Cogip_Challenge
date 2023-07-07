<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Models\Companies;

Class ControllersCompanies extends Controller
{

    public function index()
    {
        $modelCompanies = new Companies();

        $companies = $modelCompanies->getLastCompanies(5);

        return $this->view('companies',[
            'companies' => $companies,
        ]);
    }
}

?>