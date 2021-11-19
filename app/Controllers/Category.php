<?php

namespace App\Controllers;

use App\Models\CategoryModel;

class Category extends BaseController
{
    public function index()
    {
        $categories = new CategoryModel();
        $data["categories"] = $categories->getAll();
        return view('CategoryView', $data);
    }
}
