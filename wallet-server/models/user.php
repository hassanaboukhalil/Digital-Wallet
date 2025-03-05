<?php

class User
{

    public static function createUser($db_connect, $first_name, $last_name, $email, $pass)
    {
        $query = $db_connect->prepare("insert into users(first_name, last_name, email, pass) values (?, ?, ?, ?)");
        $query->bind_param("ssss", $first_name, $last_name, $email, $pass);
        $query->execute();

        if ($query->affected_rows > 0) {
            return [
                "id" => $db_connect->insert_id,
                "first_name" => $first_name,
                "email" => $email
            ];
        } else {
            throw new Exception("Failed to create user.");
        }
    }
}
