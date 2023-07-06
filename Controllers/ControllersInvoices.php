<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Models\modelsInvoices;

Class ControllerInvoices extends Controller
{

    public function index()
    {
        $modelInvoice = new Invoice();

        $invoices = $modelInvoice->getLastInvoice();

        return $this->view('invoices',[
            'invoices' => $invoices
        ]);
    }
}

?>