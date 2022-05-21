<?php

$conn = new mysqli("localhost", "root", "", "guitar_shop");
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}