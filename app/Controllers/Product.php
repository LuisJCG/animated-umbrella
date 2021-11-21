<?php

namespace App\Controllers;

use App\Models\ProductModel;

class Product extends BaseController
{
    public function index()
    {
        $productID = $_GET["id"];
        $productModel = new ProductModel();
        $data["product"] = $productModel->find($productID);
        return view('ProductView', $data);
    }
}
