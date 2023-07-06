<?php

namespace App\Controllers;

use App\Core\ErrorController;

class Controller404 extends ErrorController
{
    /*
    * return view
    */
    public function index()
    {
        return $this->error('404',["name" => "Cogip"]);
    }
}