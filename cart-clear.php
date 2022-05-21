<?php

session_start();

if(!isset($_SESSION["user_id"])) {
    http_response_code(401);
    return;
}

if(!isset($_SESSION["cart"])) {
    return;
}

$_SESSION["cart"] = null;