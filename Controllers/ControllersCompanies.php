<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Models\Companies;

Class ControllersCompanies extends Controller
{

    public function show()
    {
        $modelCompanies = new Companies();

        $companies = $modelCompanies->showCompanies();

        return $this->view('companies',[
            'companies' => $companies,
        ]);
    }
    


}

?>