<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/db.class.php';

$email = $_POST['email'];
$password = $_POST['password'];

$user = DB::queryFirstRow('SELECT * FROM user WHERE email=%s', $email);
if ($user == null) {
    http_response_code(401);
    return;
}

if(md5($password) != $user['password']) {
    http_response_code(401);
    return;
}

$_SESSION['user_id'] = $user['id'];