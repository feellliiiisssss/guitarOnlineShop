<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/db.class.php';

if(!isset($_SESSION['user_id'])) {
    http_response_code(401);
    return;
}

DB::delete('cart', 'user_id = %i', $_SESSION["user_id"]);
