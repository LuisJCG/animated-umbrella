<?php

namespace App\Controllers;

use App\Models\CartModel;
use App\Models\OrderItemModel;
use App\Models\OrderModel;

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

        // Register order and items
        $uuid = $this->registerOrder($form_data);
        $cartModel = new CartModel();
        $this->registerItem($cartModel, $uuid);

        // Clear cart
        $cartModel->empty();

        // Return Home
        $home = new Home();
        return $home->index();
    }

    public function registerOrder($form_data)
    {
        $orderModel = new OrderModel();
        $uuid = $orderModel->registerOrder($form_data);
        return $uuid;
    }

    public function registerItem($cartModel, $uuid)
    {
        $orderItemModel = new OrderItemModel();
        $cartItems = $cartModel->findAll();

        foreach ($cartItems as $item) {
            $orderItemModel->registerItemOrder($uuid, $item["product_id"]);
        }
    }
}
