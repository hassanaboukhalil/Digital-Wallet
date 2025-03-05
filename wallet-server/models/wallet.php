<?php

class Wallet
{
    public static function createWallet($db_connect, $user_id, $wallet_name)
    {
        $query = $db_connect->prepare("insert into wallets(user_id, wallet_name) values (?, ?)");
        $query->bind_param("is", $user_id, $wallet_name);
        $query->execute();

        if ($query->affected_rows > 0) {
            $wallet = [
                "wallet_id" => $db_connect->insert_id,
                "wallet_name" => $wallet_name,
                "balance" => 0
            ];
            return [
                'message' => "success",
                'wallet' => $wallet
            ];
        } else {
            throw new Exception("Failed to create wallet.");
        }
    }
}
