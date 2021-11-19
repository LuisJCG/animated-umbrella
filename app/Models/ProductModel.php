<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductModel extends Model
{
    protected $table = "Product";
    protected $primaryKey = 'id';
    protected $returnType = 'array';
    protected $useTimestamps = false;


    public function getAll() {
        return $this->findAll();
    }

}
