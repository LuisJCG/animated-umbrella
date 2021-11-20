<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductModel extends Model
{
    protected $table = "Product";
    protected $primaryKey = 'id';
    protected $returnType = 'array';
    protected $useTimestamps = false;


    public function getAllByCategoryName($category)
    {
        $query = " SELECT * FROM product INNER JOIN category ON product.id = category.id 
                    WHERE product.category = ( 
                    SELECT category.id 
                    FROM category
                    WHERE category.category_name = '$category')";

        $res = $this->db->query($query);
        return $res->getResultArray();
    }
}
