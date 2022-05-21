<?php

// Initalize database.
require_once "db.class.php";

DB::$user = "root";
DB::$password = "";
DB::$dbName = "guitar_shop";

// Register routes.
require_once "routes.php";