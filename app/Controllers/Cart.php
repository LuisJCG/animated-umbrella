<?php

namespace App\Controllers;

use App\Models\CartModel;
use App\Models\ProductModel;

class Cart extends BaseController
{
    public function index()
    {
        $data = $this->getCartInfo();
        return view('CartView', $data);
    }

    public function getCartInfo() {
        $cartModel = new CartModel();
        $cartItems = $cartModel->findAll();
        $productModel = new ProductModel();

        $data = array();
        $total_price = 0;
        $item_index = 0;

        foreach ( $cartItems as $cartItem) {
            $product = $productModel->find($cartItem["product_id"]);
            $item_price = $cartItem["quantity"] * $product["price"];
            $data["items"][$item_index] = array (
                "index" => $item_index,
                "name" => $product["name"],
                "price" => $product["price"],
                "cart_id" => $cartItem["id"],
                "quantity" => $cartItem["quantity"],
                "item_price" => $item_price
            );
            $item_index += 1;
            $total_price += $item_price;
        }

        $data["total_price"] = $total_price;
        return $data;
    }


    public function removeCart()
    {
        $productID = $_GET["id"];
        $cartModel = new CartModel();
        $cartModel->removeItem($productID);

        return $this->index();
    }
}

?>
