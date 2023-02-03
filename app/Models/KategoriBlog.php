<?php

namespace App\Models;

use CodeIgniter\Model;

class KategoriBlog extends Model
{
    protected $table            = 'kategori_blog';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $allowedFields    = ['id', 'name', 'slug', 'created_by', 'created_at'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';

    // // Validation
    // protected $validationRules      = [];
    // protected $validationMessages   = [];
    // protected $skipValidation       = false;
    // protected $cleanValidationRules = true;

    // // Callbacks
    // protected $allowCallbacks = true;
    // protected $beforeInsert   = [];a
    // protected $afterInsert    = [];
    // protected $beforeUpdate   = [];
    // protected $afterUpdate    = [];
    // protected $beforeFind     = [];
    // protected $afterFind      = [];
    // protected $beforeDelete   = [];
    // protected $afterDelete    = [];

    public function relasi()
    {
        $query = $this->db->table('kategori_blog')
            ->join('blog', 'blog.kategori_id=kategori_blog.id')
            ->get()->getResultArray();

        return $query;
    }
}
