<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/db.class.php';

if(!isset($_SESSION['user_id'])) {
    http_response_code(401);
    return;
}

$itemId = $_POST['item_id'];
$qty = $_POST['qty'];

$item = DB::queryFirstRow('SELECT * FROM item WHERE id = %i', $itemId);
if($item == null) {
    http_response_code(409);
    return;
}

$cart = DB::queryFirstRow('SELECT * FROM cart WHERE user_id = %i AND item_id = %i', $_SESSION['user_id'], $itemId);

if ($cart != null) {
    DB::update('cart', ['qty' => $qty], 'id = %i', $cart['id']);
    return;
}

DB::insert('cart', [
        'user_id' => $_SESSION['user_id'],
        'item_id' => $itemId,
        'qty' => $qty,
]);