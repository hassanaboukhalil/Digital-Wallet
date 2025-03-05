<?php
require("../../connection/connection.php");
require('../../models/user.php');
require('../../utils/functions.php');


// if (!isset($_POST["email"]) || !isset($_POST["pass"])) {
if (!issets_post_data("email", "pass")) {

    http_response_code(400);

    echo json_encode([
        "message" => "email and password are required"
    ]);

    exit();
}

$email = $_POST["email"];
$password = $_POST["pass"];


try {
    $data = User::getUser($db_connect, $email, $password);

    echo json_encode([
        $data
    ]);
} catch (Exception $e) {
    http_response_code(500);
    echo json_encode(["message" => $e->getMessage()]);
}
