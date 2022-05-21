<?php

header('Content-Type: application/json; charset=utf-8');

require_once $_SERVER['DOCUMENT_ROOT'] . '/db.class.php';

if(!isset($_SESSION["user_id"])) {
    http_response_code(401);
    return;
}

$sells = DB::query('SELECT * FROM sell WHERE user_id = %i', $_SESSION['user_id']);

$result = [];
foreach($sells as $sell) {
    $result[] = [
        'id' => $sell['id'],
        'item_count' => $sell['item_count'],
        'total_price' => $sell['total_price'],
        'created_at' => $sell['created_at']
    ];
}

echo json_encode($result);