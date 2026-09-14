<?php


require 'dbc.php' ;



if(isset($_GET['id'] )){

$id = $_GET['id'] ;

$query = "SELECT * FROM `customers` WHERE id =  $id" ;

$result =  mysqli_query($connection , $query) ;

if(mysqli_num_rows($result) ==  0 ){
      echo json_encode(['message' => "No Data by this id" ]);
}
else{
$data =  mysqli_fetch_assoc($result);

echo json_encode($data);
}


}

else{
   echo json_encode(['message' => "You Must Send id" ]);
}

