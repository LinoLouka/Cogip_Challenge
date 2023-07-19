<?php

namespace App\Core;

class Controller
{
    /*
    * @var $view, $data
    * return view
    */
    public function view($view, $data = [])
    {
        // Extract the data array into individual variables
        extract($data);
        // Include the view file
        require_once(__ROOT__.'/Resources/views/'.$view.'.php');
    }
}
