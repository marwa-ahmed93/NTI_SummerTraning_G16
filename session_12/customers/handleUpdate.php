<?php

require 'dbc.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){

$id = $_GET['id'];

$first_name = $_POST['first_name'] ;
$last_name = $_POST['last_name'] ;
$email = $_POST['email'] ;
$gender = $_POST['gender'] ;
$money = $_POST['money'] ;
$city = $_POST['city'] ;
$country = $_POST['country'] ;
$country_code = $_POST['country_code'] ;



//  $query =   " INSERT INTO customers(`first_name`,`last_name`,`email`,`gender` ,`money`,`city`,`country` , `country_code`)
//          VALUES('$first_name' , '$last_name','$email','$gender','$money' , '$city' , '$country' , '$country_code') " ;


$query = " UPDATE customers
 SET `first_name` = '$first_name' ,
  `last_name`='$last_name' ,
   `email` ='$email' ,
    `gender` = '$gender' ,
     `money` ='$money' ,
     `city` = '$city',
     `country` = '$country' , 
     `country_code` = '$country_code'
  WHERE id  = $id ";




  $result =   mysqli_query($connection , $query) ; 

  if($result){
    echo "inserted successfully" ;
    header('location:index.php')  ;
    exit();
  }


}






