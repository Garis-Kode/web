<?php

namespace App\Controllers;

class Depan extends BaseController
{
    public function index()
    {
        $data = ["title" => "Home"];
        return view('depan/landing_depan', $data);
    }

    public function blog()
    {
        $data = ["title" => "Blog"];
        return view('depan/blog_depan', $data);
    }
}
