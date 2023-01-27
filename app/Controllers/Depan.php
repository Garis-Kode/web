<?php

namespace App\Controllers;

class Depan extends BaseController
{
    public function index()
    {
        $data = ["title" => "inan"];
        return view('depan/landing_depan', $data );
    }
}
