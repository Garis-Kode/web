<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Project_opensource extends BaseController
{
    public function index()
    {
        $data = [
            "active" => "Open Source Project",
        ];
        return view("admin/project_opensource_admin", $data);
    }
}
