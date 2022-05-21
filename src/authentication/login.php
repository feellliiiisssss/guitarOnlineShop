<?php

session_start();

include "database_service.php";

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM user WHERE email = '$email'";
$query = $conn->query($sql);
$result = $query->fetch_assoc();

if ($result != null) {
    if(md5($password) == $result['password']) {
        $_SESSION["user_id"] = $result['id'];
        return;
    }
}

http_response_code(401);
