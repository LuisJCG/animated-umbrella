<?php

namespace App\Models;

use CodeIgniter\Model;

class CartModel extends Model
{
    protected $table = "Cart";
    protected $primaryKey = 'id';
    protected $returnType = 'array';
    protected $useTimestamps = false;
    protected $allowedFields = ["id", "product_id", "quantity"];

    public function addItem($productId)
    {
        $query = "SELECT * FROM Cart
        WHERE product_id = $productId";
        $query = $this->db->query($query);
        $row = $query->getRow();

        $data = [];

        if ($row != null) {
            $data = [
                'id'            => $row->id,
                'product_id'    => $productId,
                'quantity'      => $row->quantity+1
            ];  
        } else {
            $data = [
                'product_id'    => $productId,
                'quantity'      => 1
            ];  
        }
        $this->save($data);
    }

    public function removeItem($productId)
    {
        $this->where('id', $productId)->delete();
    }
}

?>