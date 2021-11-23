<?php

namespace App\Models;

use CodeIgniter\Model;

class OrderModel extends Model
{
    protected $table = "storeorder";
    protected $primaryKey = 'id';
    protected $returnType = 'array';
    protected $useTimestamps = false;
    protected $allowedFields = ["id", "name", "email", "address", "status"];

    public function registerOrder($form_data)
    {
        $uuid = uniqid();

        $query = "INSERT INTO storeorder (id, name, email, address, status) 
        VALUES ('+$uuid+',
        '".$form_data['clientName']."',
        '".$form_data['clientMail']."',
        '".$form_data['clientAddress']."',
        'proccesing');";

        $this->db->query($query);
        return $uuid;
    }
}
