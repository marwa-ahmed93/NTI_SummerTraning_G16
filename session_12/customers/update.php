<?php
require 'dbc.php';

$id  = $_GET['id'];
$query = "SELECT * FROM `customers` WHERE id = $id" ; 

$result = mysqli_query($connection , $query) ;

$customer  = mysqli_fetch_assoc($result);

// print_r($customer) ;

// die();


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
    
<h2 class="text-center p-3 text-info">Update Customer</h2>

<form action="handleUpdate.php?id=<?= $customer['id'] ?>" method="post" class="w-75 m-auto">



  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">first_name</label>
    <input type="text" name="first_name" value="<?php  echo $customer['first_name'] ; ?>" class="form-control" id="exampleInputPassword1">
  </div>


    <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">last_name</label>
    <input type="text" name="last_name" value="<?php  echo $customer['last_name'] ; ?>" class="form-control" id="exampleInputPassword1">
  </div>




  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" name="email" value="<?php  echo $customer['email'] ; ?>"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>



     <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">gender</label>
    <input type="text" name="gender" value="<?php  echo $customer['gender'] ; ?>" class="form-control" id="exampleInputPassword1">
  </div>

    <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">money</label>
    <input type="number" name="money" value="<?php  echo $customer['money'] ; ?>" class="form-control" id="exampleInputPassword1">
  </div>


  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">city</label>
    <input type="text" name="city" value="<?php  echo $customer['city'] ; ?>" class="form-control" id="exampleInputPassword1">
  </div>

    <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">country</label>
    <input type="text" name="country" value="<?php  echo $customer['country'] ; ?>" class="form-control" id="exampleInputPassword1">
  </div>

    <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">country_code</label>
    <input type="text" name="country_code" value="<?php  echo $customer['country_code'] ; ?>"  class="form-control" id="exampleInputPassword1">
  </div>


  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>






</body>
</html>