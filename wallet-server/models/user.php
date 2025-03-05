<?php

class User
{

    public static function createUser($db_connect, $first_name, $last_name, $email, $pass)
    {
        $query = $db_connect->prepare("insert into users(first_name, last_name, email, pass) values (?, ?, ?, ?)");
        $query->bind_param("ssss", $first_name, $last_name, $email, $pass);
        $query->execute();

        if ($query->affected_rows > 0) {
            $user = [
                "id" => $db_connect->insert_id,
                "first_name" => $first_name,
                "email" => $email
            ];
            return [
                'message' => "success",
                'user' => $user
            ];
        } else {
            throw new Exception("Failed to create user.");
        }
    }

    public static function getUser($db_connect, $email, $password)
    {
        $query = $db_connect->prepare("SELECT id, first_name, email, pass FROM users WHERE email = ?");
        $query->bind_param("s", $email);
        $query->execute();

        $array = $query->get_result();

        $response = [];
        while ($user = $array->fetch_assoc()) {
            $response[] = $user;
        }

        $user = $response[0];

        if ($user['pass'] != $password) {
            return [
                'message' => "Wrong email or password",
            ];
        }

        unset($user["pass"]);


        return [
            'message' => "success",
            'user' => $user
        ];
    }
}
