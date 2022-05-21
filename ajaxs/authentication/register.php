<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/db.class.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/utils/time_util.php';

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

// Check email is registered.
$user = DB::queryFirstRow('SELECT * FROM user WHERE email = %s', $email);
if($user != null) {
    http_response_code(409);
    return;
} 

DB::insert('user', [
    'name' => $name,
    'email' => $email,
    'password' => md5($password),
    'created_at' => TimeUtil::GetCurrentTime(),
]);