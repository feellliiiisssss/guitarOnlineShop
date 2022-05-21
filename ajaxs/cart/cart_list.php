<?php

header('Content-Type: application/json; charset=utf-8');

require_once $_SERVER['DOCUMENT_ROOT'] . '/db.class.php';

if(!isset($_SESSION['user_id'])) {
    http_response_code(401);
    return;
}

$carts = DB::query('SELECT * FROM cart WHERE user_id = %i', $_SESSION['user_id']);

$result = [];
foreach($carts as $cart) {
    $item = DB::queryFirstRow('SELECT * FROM item WHERE id = %i', $cart['item_id']);
    $result[] = [
        'id' => $cart['id'],
        'item' => $item,
        'qty' => $cart['qty']
    ];
}

echo json_encode($result);