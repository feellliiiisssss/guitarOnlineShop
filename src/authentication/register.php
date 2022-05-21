<?php

include "database_service.php";

$name = $_POST['name'];
$email = $_POST['email'];
$password = md5($_POST['password']);

$sql = "INSERT INTO user (name, email, password) VALUES ('$name', '$email', '$password')";
$result = $conn->query($sql);