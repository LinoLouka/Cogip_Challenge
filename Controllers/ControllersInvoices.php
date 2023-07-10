<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Models\Invoices;

Class ControllersInvoices extends Controller
{

    public function show()
    {
        $modelInvoice = new Invoices();

        $invoices = $modelInvoice->showInvoices();

        return $this->view('invoices',[
            'invoices' => $invoices,
        ]);
    }

    public function showId($id)
    {
        $modelInvoice = new Invoices();

        $invoices = $modelInvoice->Id($id);

        $data = [
            'id' => $invoices['id'],
            'id_company' => $invoices['id_company'],
            'created_at' => $invoices['created_at'],
            'updated_at' => $invoices['updated_at']

        ];

        return $this->view('show_invoice', $data);

    }
    }

?>