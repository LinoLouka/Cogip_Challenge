<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Models\Invoices;

Class ControllerInvoices extends Controller
{

    public function index()
    {
        $modelInvoice = new Invoices();

        $invoices = $modelInvoice->getLastInvoice(5);

        return $this->view('invoices',[
            'invoices' => $invoices
        ]);
    }
}

?>