<?php
require("../../connection/connection.php");
require('../../models/user.php');
require('../../models/wallet.php');
require('../../utils/functions.php');

//. !isset($_POST["first_name"]) || !isset($_POST["last_name"]) || !isset($_POST["email"]) || !isset($_POST["pass"])
if (!issets_post_data("first_name", "last_name", "email", "pass")) {

    http_response_code(400);

    echo json_encode([
        "message" => "first name, last name, email and password are required"
    ]);

    exit();
}

$first_name = $_POST["first_name"];
$last_name = $_POST["last_name"];
$email = $_POST["email"];
$password = $_POST["pass"];


try {
    $data = User::createUser($db_connect, $first_name, $last_name, $email, $password);

    if ($data['message'] == "success") {
        $data_wallet = Wallet::createWallet($db_connect, $data['user']['id'], "main");
        if ($data_wallet['message'] != 'success') {
            echo json_encode([
                $data_wallet
            ]);
            return;
        } else {
            $data['user']['wallet_id'] = $data_wallet['wallet']['wallet_id'];
            $data['user']['wallet_name'] = $data_wallet['wallet']['wallet_name'];
            $data['user']['balance'] = $data_wallet['wallet']['balance'];
        }
    }

    echo json_encode([
        $data
    ]);
} catch (Exception $e) {
    http_response_code(400);
    echo json_encode(["message" => "whyyyyyyyy"]); //$e->getMessage()
}
