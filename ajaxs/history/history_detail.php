<?php

header('Content-Type: application/json; charset=utf-8');

require_once $_SERVER['DOCUMENT_ROOT'] . '/db.class.php';

if(!isset($_SESSION["user_id"])) {
    http_response_code(401);
    return;
}

$sell = DB::queryFirstRow('SELECT * FROM sell WHERE id = %i AND user_id = %i', $historyId, $_SESSION['user_id']);
$sellItems = DB::query('SELECT * FROM sell_item WHERE sell_id = %i', $historyId);

$items = [];
foreach($sellItems as $sellItem) {
    $item = DB::queryFirstRow('SELECT * FROM item WHERE id = %i', $sellItem['item_id']);
    $items[] = [
        'item' => $item,
        'qty' => $sellItem['qty'],
        'price' => $sellItem['price'],
        'total_price' => $sellItem['total_price']
    ];
}

echo json_encode(
    [
        'id' => $sell['id'],
        'item_count' => $sell['item_count'],
        'total_price' => $sell['total_price'],
        'created_at' => $sell['created_at'],
        'items' => $items
    ]
);