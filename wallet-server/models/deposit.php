<?php

class Deposit
{
    public static function createDeposit($db_connect, $user_id, $wallet_id, $amount)
    {
        $query = $db_connect->prepare("insert into deposits(user_id, wallet_id, amount) values (?, ?, ?)");
        $query->bind_param("iii", $user_id, $wallet_id, $amount);
        $query->execute();

        if ($query->affected_rows > 0) {
            // $wallet = [
            //     "wallet_id" => $db_connect->insert_id,
            //     "wallet_name" => $wallet_name,
            //     "balance" => 0
            // ];
            return [
                'message' => "success",
                // 'wallet' => $wallet
            ];
        } else {
            throw new Exception("Failed to create deposit.");
        }
    }
}
