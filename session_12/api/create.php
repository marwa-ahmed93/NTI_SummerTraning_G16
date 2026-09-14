<?php

require 'dbc.php';

$data =  json_decode(file_get_contents('php://input') , true) ;


if ($_SERVER['REQUEST_METHOD'] == 'POST') {


    $first_name = $data['first_name']?? $_POST['first_name'];
    $last_name = $data['last_name'] ?? $_POST['last_name'];
    $email = $data['email'] ?? $_POST['email'];
    $gender = $data['gender'] ?? $_POST['gender'];
    $money = $data['money'] ?? $_POST['money'];
    $city = $data['city'] ?? $_POST['city'];
    $country = $data['country'] ?? $_POST['country'];
    $country_code = $data['country_code'] ?? $_POST['country_code'];



    $query =   " INSERT INTO customers(`first_name`,`last_name`,`email`,`gender` ,`money`,`city`,`country` , `country_code`)
         VALUES('$first_name' , '$last_name','$email','$gender','$money' , '$city' , '$country' , '$country_code') ";

    $result =   mysqli_query($connection, $query);

    if ($result) {
        echo json_encode(['message' => 'Data inserted successfully']);
    } else {
        echo json_encode(['message' => 'Invalid Data']);
    }
} else {
    echo json_encode(['message' => 'The method should be Post']);
}
