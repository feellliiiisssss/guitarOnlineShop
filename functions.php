<?php

//koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "cheetarr_db");
if ($conn === false) {
    die("Unable to connect " . mysqli_connect_error());
}

function query($query) 
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result))
    {
        $rows[] = $row;
    }
    return $rows;
}
?>