<?php

$db = mysqli_connect('localhost', 'root', '', 'guitar_shop');
if(!$db) {
    echo "cant connect";
}