<?php

namespace App\Controllers;

use App\Models\ProductModel;

class Category extends BaseController
{
    public function index()
    {
        $category = $_GET["cat"];
        $products = new ProductModel();
        $data["categories"] = $products->getAllByCategoryName($category);
        return view('CategoryView',$data );
    }
}
