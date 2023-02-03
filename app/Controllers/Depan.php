<?php

namespace App\Controllers;

use App\Models\Blog;
use App\Models\KategoriBlog;

class Depan extends BaseController
{
    protected $Blog, $kategoriBlog;
    public function __construct()
    {
        $this->Blog = new Blog();
        $this->kategoriBlog = new KategoriBlog();
    }
    public function index()
    {
        $data = ["title" => "Home"];
        return view('depan/landing_depan', $data);
    }

    public function blog()
    {
        // return $this->response->setJSON($this->kategoriBlog->relasi());
        // d($this->kategoriBlog->relasi());
        $Blog = $this->Blog->findAll();
        $kategoriBlog = $this->kategoriBlog->findAll();
        $data = [
            "title" => "Blog",
            "kategoriBlog" => $kategoriBlog,
            "blog" => $Blog
        ];
        return view('depan/blog_depan', $data);
    }
    public function FetchBlog($kategoriId)
    {

        $Blog = $this->Blog->where("kategori_id", $kategoriId)->findAll();

        return $this->response->setJSON($Blog);


    }

    public function blog_detail()
    {
        $Blog = $this->Blog->findAll();
        $data = [
            "title" => "Blog",
            "blog" => $Blog
        ];
        return view('depan/blog_detail', $data);
    }
}
