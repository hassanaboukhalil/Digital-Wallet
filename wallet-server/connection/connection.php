<?php

$host = "localhost";
$user = "root";
$password = "";
$db_name = "digital_wallet_db";

if ($db_connect->connect_error) {
    die("connection failed: " . $db_connect->connect_error);
}
