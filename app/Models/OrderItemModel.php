<?php

namespace App\Models;

use CodeIgniter\Model;

class OrderItemModel extends Model
{
    protected $table = "ItemOrder";
    protected $primaryKey = 'id';
    protected $returnType = 'array';
    protected $useTimestamps = false;
    protected $allowedFields = ["id", "id_order", "id_product"];

    public function registerItemOrder($orderID, $productID)
    {
        $orderItem  = [
            'id_order'    => $orderID,
            'id_product'    => $productID,
        ];
        $this->save($orderItem);
    }
}
