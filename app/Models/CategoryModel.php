<?php

namespace App\Models;

use CodeIgniter\Model;

class CategoryModel extends Model
{
    protected $table = "Category";
    protected $primaryKey = 'id';
    protected $returnType = 'array';
    protected $useTimestamps = false;

    public function getAll() {
        return $this->findAll();
    }

}
