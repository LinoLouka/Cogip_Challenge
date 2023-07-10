<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Models\Invoices;

Class ControllersInvoices extends Controller
{

    public function show()
    {
        $modelInvoice = new Invoices();

        $invoices = $modelInvoice->showInvoices(5);

        return $this->view('invoices',[
            'invoices' => $invoices,
        ]);
    }
    }

?>