<?php

session_start();

if(!isset($_SESSION["user_id"])) {
    http_response_code(401);
    return;
}

include "database_service.php";

$sql = "SELECT * FROM sell WHERE user_id = " . $_SESSION["user_id"] . " AND id = " . $_GET['id'];
$query = $conn->query($sql);
$result = $query->fe();

if ($result != null) {
    foreach ($result as $row) {
        echo $row['name'];
    }
}
