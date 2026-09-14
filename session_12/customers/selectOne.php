<?php

require 'dbc.php' ;




$id = $_GET['id'];

 $query =     "SELECT * FROM `customers` WHERE id  = $id"  ;

 $result =  mysqli_query($connection , $query);

if(mysqli_num_rows($result )  > 0) {

 $customer =  mysqli_fetch_assoc($result) ; 

}
else{
    header('location:index.php');
    exit();
}






//  echo "<pre>";
//  print_r($customer) ;



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    


<div class="container my-5">

<div class="card text-center">
  <div class="card-header">
    Customer Details   
    <?php  echo $customer['id'] ?>
  </div>
  <div class="card-body">
    <h5 class="card-title">Customer name:  <?php echo $customer['first_name'] ." ". $customer['last_name'] ?></h5>
    <h6 class="card-text"> Customer Email: <?php echo $customer['email'] ?></h6>
    <p class="card-text"> Customer Gender: <?php echo $customer['gender'] ?></p>
    <p class="card-text"> Customer Money: <?php echo $customer['money'] ?></p>
    <p class="card-text"> Customer Country: <?php echo $customer['country'] ?></p>
 
   
  </div>

</div>
</div>




</body>
</html>