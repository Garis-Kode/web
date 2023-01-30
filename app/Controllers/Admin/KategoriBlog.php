<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\KategoriBlog as ModelsKategoriBlog;

class KategoriBlog extends BaseController
{


    protected $Objek;
    public function __construct()
    {
        $this->Objek = new ModelsKategoriBlog();
    }
    public function index()
    {
        $Objek = $this->Objek->findAll();
        $data = [
            "active" => "kategoriBlog",
            "objek" =>  $Objek
        ];
        return view("admin/kategori_admin", $data);
    }

    public function save()
    {
        $this->Objek->save([
            'name' => $this->request->getVar('nama'),
            'slug' => slugify($this->request->getVar('nama')),
            'created_by' => user()->name
        ]);
        session()->setFlashdata('pesan', 'Data Telah Berhasil di Simpan');
        return redirect()->to('/admin/KategoriBlog');
    }

    public function delete($id)
    {
        //return $id;
        $this->Objek->delete($id);
        session()->setFlashdata('hapus', 'Data Telah Berhasil di Hapus');
        return redirect()->to('/admin/KategoriBlog');
    }
    public function saveEdit($id)
    {


        $this->Objek->update($id, [
            'name' => $this->request->getVar('nama'),
            'slug' => slugify($this->request->getVar('nama')),
            'created_by' => user()->name
        ]);
        session()->setFlashdata('hapus', 'Data Telah Berhasil di Edit');
        return redirect()->to('/admin/KategoriBlog');
    }
}

// SLUG GENERATOR
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
