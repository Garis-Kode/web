<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\Blog;
use App\Models\KategoriBlog;

class Artikel extends BaseController
{
    protected $KategoriBlog;
    protected $Blog;
    public function __construct()
    {
        $this->KategoriBlog = new KategoriBlog();
        $this->Blog = new Blog();
    }
    public function index()
    {
        $Blog = $this->Blog->findAll();
        $data = [
            "active" => "artikel",
            "Blog" => $Blog
        ];
        return view("admin/artikel_admin", $data);
    }
    public function tambah()
    {
        $KategoriBlog = $this->KategoriBlog->findAll();
        $data = [
            "active" => "artikel",
            "KategoriBlog" => $KategoriBlog
        ];
        return view("admin/tambah_artikel_admin", $data);
    }

    public function save()
    {
        $thumb = $this->request->getFile("thumb");
        $thumb->move("thumbnail");

        $this->Blog->save([
            'judul' => $this->request->getVar('judul'),
            'isi' => $this->request->getVar('editor1'),
            'kategori_id' => $this->request->getVar('kategori'),
            'gambar' => $thumb->getName(),
            'user_id' => user()->id,
            'author' => user()->name,
            'slug' => slugify($this->request->getVar('judul')),
        ]);
        session()->setFlashdata('pesan', 'Data Telah Berhasil di Simpan');
        return redirect()->to('/admin/artikel');
    }

    public function edit()
    {
        $KategoriBlog = $this->KategoriBlog->findAll();
        $Blog = $this->Blog->findAll();

        $data = [
            "active" => "artikel",
            "KategoriBlog" => $KategoriBlog,
            "Blog" => $Blog
        ];
        return view("admin/tambah_artikel_admin", $data);
    }
    public function delete($id)
    {
        //return $id;
        $this->Blog->delete($id);
        session()->setFlashdata('hapus', 'Data Telah Berhasil di Hapus');
        return redirect()->to('/admin/artikel');
    }
}

function slugify($text, string $divider = '-')
{
    // replace non letter or digits by divider
    $text = preg_replace('~[^\pL\d]+~u', $divider, $text);
    // transliterate
    $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
    // remove unwanted characters
    $text = preg_replace('~[^-\w]+~', '', $text);
    // trim
    $text = trim($text, $divider);
    // remove duplicate divider
    $text = preg_replace('~-+~', $divider, $text);
    // lowercase
    $text = strtolower($text);
    if (empty($text)) {
        return 'n-a';
    }
    return $text;
}
