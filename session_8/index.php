<?php


// $arr =  [1 ,5 ,6 ,8];
// //write function that take  an array of numbers and return the total of them 
// //write function that return the max numbers of an array 


// function sumArray($arr){
//     $sum =0 ;
//     for($i =0 ; $i< count($arr) ; $i++){
//              $sum += $arr[$i];
//     }
//     return $sum ;
// }


// //////////////////////////

// function maxArr($arr){
//     $max = $arr[0] ;
//     for($i =0 ; $i< count($arr) ; $i++){
//         if($arr[$i] > $max ){
//             $max = $arr[$i];
//         }
//     }
//     return $max ;
// }


////////////////////////////  GET && POST //////////////////////////////////////////////////////////////


// echo "welcome";

// print_r($_GET);

// echo  $_GET['email'] ."<br>";
// echo  $_GET['password'] ."<br>";



// print_r($_POST);


// $arr = [
//     'email' => 'ahmed@gmail.com' ,
//     'password' => '123456'
// ] ;


// if(isset($_POST['submit'])){

//   $email =  $_POST['email'] ;
//   $passwordisset =  $_POST['password'];

//   if($email == $arr['email']  && $password == $arr['password']){
//     echo " welcome " ;
//   }
//   else{
//     echo "invalid Data" ;
//   }

// }else{

//     echo "please Login ";

// }





///////////////////////////////////////////////////////

//  if(isset($_POST['submit'])){

// $number_one = $_POST['num1'] ;
// $number_two =  $_POST['num2'] ;

// $operators  =  $_POST['operators'] ;


// switch($operators){
//     case '+' :
//         echo $number_one + $number_two ;
//         break ;

//          case '-' :
//         echo $number_one - $number_two ;
//         break ;


//          case '*' :
//         echo $number_one * $number_two ;
//         break ;

//          case '/' :
//         echo $number_one / $number_two ;
//         break ;


//         default :
//         echo "invalid" ;
// }


// }
// else{
//     echo "Login First";
// }


// print_r($_POST) ;



/////////////////////// Cookie && session   ///////////////////////////////////////////


// print_r($_POST);
// // die();
// return ;

// if(isset($_POST['submit'])){
 
// $user_name = $_POST['name'] ;
// $password = $_POST['password'] ;

// // echo "Welcome $user_name";

// if(isset($_POST['remember_me']) && $_POST['remember_me'] == true){
// setcookie('username' , $user_name , time()+60) ;
// setcookie('password' , $password , time()+60) ;
// echo "Welcome ". $_COOKIE['username'] ;
// }




// }



///////////////////////////////  Session  ////////////////////////////////////

session_start();


if(isset($_POST['submit'])){
 
$user_name = $_POST['name'] ;
$password = $_POST['password'] ;
$errors = [] ;

if(strlen($user_name) <3 ||  strlen($user_name) >12 ){
    $errors[] = "The user name should be between 3 and 12 char";
}

if(strlen($password) <6 ||  strlen($password) >12 ){
    $errors[] = "The password should be between 6 and 12 char";
}

if($errors){
    $_SESSION['errors'] = $errors ;
    header('location:form.php');
    exit();
}


$_SESSION['username'] = $user_name ;
$_SESSION['password'] = $password ;

// echo "Welcome $user_name";

if(isset($_POST['remember_me']) && $_POST['remember_me'] == true){
setcookie('username' , $user_name , time()+60) ;
setcookie('password' , $password , time()+60) ;
echo "Welcome ". $_COOKIE['username'] ;
}



header('location:welcome.php');



}










