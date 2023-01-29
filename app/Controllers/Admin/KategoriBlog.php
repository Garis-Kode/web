<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class KategoriBlog extends BaseController
{
    public function index()
    {
        return view("admin/kategori_admin");
    }
}
