<?php
require("../../connection/connection.php");
require('../../models/deposit.php');
require('../../utils/functions.php');


// if (!isset($_POST["email"]) || !isset($_POST["pass"])) {
if (!issets_post_data("user_id", "wallet_id", "amount")) {

    http_response_code(400);

    echo json_encode([
        "message" => "something wrong"
    ]);

    exit();
}

$user_id = $_POST["user_id"];
$wallet_id = $_POST["wallet_id"];
$amount = $_POST["amount"];


try {
    $data = Deposit::createDeposit($db_connect, $user_id, $wallet_id, $amount);

    echo json_encode([
        $data
    ]);
} catch (Exception $e) {
    http_response_code(500);
    echo json_encode(["message" => $e->getMessage()]);
}
