<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Dashboard extends BaseController
{
    public function index()
    {
        $data = [
            "active" => "dashboard"
        ];
        return view("admin/dashboard_admin", $data);
    }
}
