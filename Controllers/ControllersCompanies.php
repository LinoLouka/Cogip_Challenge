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
    public function showId($id)
    {

        $modelCompanies = new Companies();

        $companies = $modelCompanies->Id($id);

        $data = [
            'tva' => $companies['tva'],
            'type_id' => $companies['type_id'],
            'name' => $companies['name'],
            'country' => $companies['country'],
            'created_at' => $companies['created_at']
        ];

       return $this->view('show_company', $data);


    }
    


}

?>