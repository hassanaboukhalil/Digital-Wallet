<?php
header("Access-Control-Allow-Origin: *"); //allow any origin.
header("Access-Control-Allow-Methods: POST, GET, DELETE");
header("Content-Type: application/json");
header("Access-Control-Allow-Headers: Content-Type");

$host = "localhost";
$user = "root";
$password = "";
$db_name = "digital_wallet_db";

$db_connect = new mysqli($host, $user, $password, $db_name);

if ($db_connect->connect_error) {
    die("connection failed: " . $db_connect->connect_error);
}
