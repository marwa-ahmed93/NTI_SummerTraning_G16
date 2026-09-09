<?php


// echo  filter_var($username , FILTER_VALIDATE_REGEXP ,['options'=>[ 'regexp'=> '/^[A-Z][a-z]{3,8}$/'  ]]) ;


$validates =[

'username' => [
 'filters' => FILTER_VALIDATE_REGEXP  ,
 'my_options' => ['options'=>[ 'regexp'=> '/^[A-Z][a-z]{3,8}$/'  ]] ,
 'error' => "The Name start with Upper and length between 4 and 9"
] ,

'password' => [
     'filters' => FILTER_VALIDATE_REGEXP  ,
 'my_options' => ['options'=>[ 'regexp'=> '/^[0-9a-z]{3,8}$/'  ]] ,
 'error' => "The password  and length between 3 and 8"
] ,

'email' => [
         'filters' => FILTER_VALIDATE_EMAIL  ,

        'error' => "Invalid Email"
] ,

'age' => [
        'filters' => FILTER_VALIDATE_INT,
 'my_options' => ['options'=>[ 'min_range'=> 15 , 'max_range' => 50  ]] ,
 'error' => "The Age should be between 15 and 50"
] ,



];