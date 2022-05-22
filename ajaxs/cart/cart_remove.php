<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/db.class.php';

if(!isset($_SESSION["user_id"])) {
    http_response_code(401);
    return;
}

DB::delete('cart', 'id = %i AND user_id = %i', $itemId, $_SESSION["user_id"]);