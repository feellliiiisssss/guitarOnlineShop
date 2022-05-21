<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/db.class.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/utils/time_util.php';

function countTotalPrice($carts) {
    $total = 0;
    foreach($carts as $cart) {
        $item = DB::queryFirstRow('SELECT * FROM item WHERE id = %i', $cart['item_id']);
        $total += $item['price'] * $cart['qty'];
    }

    return $total;
}

$phoneNumber = $_POST['phone_number'];
$city = $_POST['city'];
$address = $_POST['address'];
$postalCode = $_POST['postal_code'];

$carts = DB::query('SELECT * FROM cart WHERE user_id = %i', $_SESSION['user_id']);

DB::insert('sell', [
    'user_id' => $_SESSION['user_id'],
    'phone_number' => $phoneNumber,
    'city' => $city,
    'address' => $address,
    'postal_code' => $postalCode,
    'item_count' => count($carts),
    'total_price' => countTotalPrice($carts),
    'created_at' => TimeUtil::GetCurrentTime()
]);

$sellId = DB::insertId();

$sellItems = [];
foreach($carts as $cart) {
    $item = DB::queryFirstRow('SELECT * FROM item WHERE id = %i', $cart['item_id']);
    $sellItems[] = [
        'sell_id' => $sellId,
        'item_id' => $cart['item_id'],
        'qty' => $cart['qty'],
        'price' => $item['price'],
        'total_price' => $item['price'] * $cart['qty']
    ];
}

DB::insert('sell_item', $sellItems);
DB::delete('cart', 'user_id = %i', $_SESSION["user_id"]);