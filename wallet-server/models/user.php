<?php
// include('../connection/connection.php');


class User
{

    // public static function createUser($first_name, $last_name, $email, $pass)
    // {
    //     $query = User::$db_connect->prepare("insert into users(first_name, last_name, email, pass) values (?, ?, ?, ?)");
    //     $query->bind_param("ssss", $first_name, $last_name, $email, $pass);
    //     $query->execute();
    //     $response = [
    //         "success" => true,
    //         "message" => "User Created"
    //     ];
    //     echo json_encode($response);
    // }


    public static function getUser($db_connect, $id)
    {
        $query = $db_connect->prepare("select * from users where id = ?");
        $query->bind_param("i", $id);
        $query->execute();

        $array = $query->get_result();

        $response = [];

        while ($user = $array->fetch_assoc()) {
            $response[] = $user;
        }

        echo json_encode($response);
    }
}
