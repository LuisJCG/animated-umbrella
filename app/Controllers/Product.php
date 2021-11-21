<?php

namespace App\Controllers;

use App\Models\ProductModel;
use App\Models\CartModel;

class Product extends BaseController
{
    public function index()
    {
        $productID = $_GET["id"];
        $productModel = new ProductModel();
        $data["product"] = $productModel->find($productID);

        return view('ProductView', $data);
    }

    public function addCart()
    {
        $productID = $_GET["id"];
        $cartModel = new CartModel();
        $cartModel->addItem($productID);

        return $this->index();
    }

}

?>