<?php

namespace App\Controllers;

use App\Models\ProductModel;

class Category extends BaseController
{
    public function index()
    {
        $category = $_GET["cat"];
        $productModel = new ProductModel();
        $data["products"] = $productModel->getAllByCategoryName($category);
        return view('CategoryView', $data);
    }
}
