<?php

session_start();

if(!isset($_SESSION["user_id"])) {
    http_response_code(401);
    return;
}

include "./services/database_service.php";

class CartModel {
    public $itemId;
    public $qty;

    function constructor($itemId, $qty) {
        $this->itemId = $itemId;
        $this->qty = $qty;
    }
}

$id = $_POST['id'];
$qty = $_POST['qty'];

// Tambah item kalau belum ada cart
if(!isset($_SESSION["cart"])) {
    $_SESSION["cart"] = array(new CartModel($id, $qty));
    return;
}

// Rubah value qty, kalau item sudah ada di cart
while($cartItem = current($_SESSION["cart"])) {
    if($cartItem->itemId == $id) {
        $cartItem->qty = $qty;
        return;
    }
    next($_SESSION["cart"]);
}

// Tambah item kalau belum ada di cart
if(!$cartItem) {
    array_push($_SESSION["cart"], new CartModel($id, $qty));
}