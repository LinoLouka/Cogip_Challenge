<?php 

namespace App\Core;

class ErrorController 
{
    /*
    * @var $view, $data
    * return view
    */
    public function error($view, $data = [])
    {
        extract($data);
        require_once(__ROOT__.'/Resources/views/'.$view.'.php');
    }
}