<?php

namespace App\Controllers;
use App\Models\CategoryModel;


class Confirm extends BaseController
{
    public function index()
    {
        $cart = new Cart();
        $data = $cart->getCartInfo();
        return view('ConfirmPurchageView', $data);
    }

    public function register() 
    {

        $form_data = $this->request->getPost();
        print_r($form_data);
        echo($_POST);
        print_r($_POST);
    }
}
