<?php

namespace App\Models;

use CodeIgniter\Model;

class Blog extends Model
{
    protected $table            = 'blog';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;

    protected $allowedFields    = ['id', 'judul', 'isi', 'tanggal', 'kategori_id', 'views', 'gambar', 'user_id', 'author', 'slug', 'meta_description'];
}
