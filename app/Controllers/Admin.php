<?php

namespace App\Controllers;

use App\Models\OrderModel;


class Admin extends BaseController
{
    public function index()
    {
        $orderModel = new OrderModel();
        $orders = $orderModel->findAll();
        $data["orders"] = $orders;
        return view('AdminView', $data);
    }
}

?>
