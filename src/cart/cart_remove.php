<?php

session_start();

if(!isset($_SESSION["user_id"])) {
    http_response_code(401);
    return;
}

include "./services/database_service.php";

$id = $_POST['id'];

if(!isset($_SESSION["cart"])) {
    return;
}

$i = 0;
while($cartItem = current($_SESSION["cart"])) {
    $i++;
    if($cartItem->itemId == $id) {
        unset($cartItem[i]);
        break;
    }
    next($_SESSION["cart"]);
}