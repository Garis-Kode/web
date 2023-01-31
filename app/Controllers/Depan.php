<?php

namespace App\Controllers;

use App\Models\Blog;

class Depan extends BaseController
{
    protected $Blog;
    public function __construct()
    {
        $this->Blog = new Blog();
    }
    public function index()
    {
        $data = ["title" => "Home"];
        return view('depan/landing_depan', $data);
    }

    public function blog()
    {
        $Blog = $this->Blog->findAll();
        $data = [
            "title" => "Blog",
            "blog" => $Blog
        ];
        return view('depan/blog_depan', $data);
    }
}
