<?php
require("../../connection/connection.php");
require('../../models/user.php');


if (!isset($_POST["first_name"]) || !isset($_POST["last_name"]) || !isset($_POST["email"]) || !isset($_POST["pass"])) {

    http_response_code(400);

    echo json_encode([
        "message" => "first name, last name, email and password are required"
    ]);

    exit();
}

$first_name = $_POST["first_name"];
$last_name = $_POST["last_name"];
$email = $_POST["email"];
$pass = $_POST["pass"];

$password = password_hash($password, PASSWORD_BCRYPT);

try {
    $user = User::createUser($db_connect, $first_name, $last_name, $email, $password);

    echo json_encode([
        "success" => true,
        "user" => $user
    ]);
} catch (Exception $e) {
    http_response_code(400);
    echo json_encode(["message" => $e->getMessage()]);
}
