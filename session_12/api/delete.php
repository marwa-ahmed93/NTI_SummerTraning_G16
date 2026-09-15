<?php

require 'dbc.php';

if (!isset($_GET['id'])) {
    echo json_encode(['message' => 'You must send id']);
} 

else {

    $id = $_GET['id'];

    $query = " DELETE FROM customers WHERE id = $id";

    $result =  mysqli_query($connection, $query);

    if ($result) {

        if(mysqli_affected_rows($connection)){
              echo json_encode(['message' => "Deleted"]);
        }
        else{
             echo json_encode(['message' => "invalid id "]);
        }
       
    }


    // if(mysqli_num_rows($result) == 0){   //null

    // }
}
