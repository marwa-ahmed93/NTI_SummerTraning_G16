
<?php

// echo "Hello World";
// echo "<br>";

// echo "Hello Worl <br>" ;
// echo "Hello Worl <br>" ;
// echo "Hello Worl <br>" ;
// echo "Hello Worl <br>" ;
// echo "Hello Worl <br>" ;
// echo "Hello Worl <br>" ;



// echo 5+5 ;   //10

/******************* Variables ***************************************************************** */
// int x = 5+5;    boolean isActive = true ;   string username = "moamed" // strongly type


//loosely type  php    $x=5+5   $x = "malik"    $x=false    php js  var x = 10  



// $x = 5+5 ;  //10  integer
// echo $x + 20 ;
// echo gettype($x);
echo "<br>";

$x = "malik";   //string
//  echo $x ;
// echo gettype($x);
//  echo "<br>";

/**   $variable_name  = variable_value  ;   */




/****************    PHP Data Types    ************************************************************************** */

/**
 * string (text values)   $username = "ahmed" 
 * int (whole numbers)     $num = 20 ;
 * float (decimal numbers)  $num = 2.3 ;
 * bool (true or false)    $isActive = true
 * array (multiple values)   $students = [] ;    $students = array() ;
 * object (stores data as objects)  {}
 * null (empty variable)    $x = null
 * 
 */






/*************************  Casting  ********************************************************************* */
/**
 * automatic casting   =>   "5" + 5   => 10
 * manual casting     =>   (int)"mm" + 20
 */


// $number = "5" + 5 ;   // 5+5  =>  10   
// echo $number ;



// $number = (int) "mm" + 20 ;  //  0 + 20  => 20 
// echo $number ;




// $number = (int) 5.5 + 20 ;  //  5 +20  =>  25
// echo $number ;



// $num = 5 . 55 ;                //concat
// echo $num ;




/*****************************************  IF statement    ******************************************************************* */

// $age = 10 ;

// if($age > 18 ){   //true
// echo "You Can Register";
// }
// else{
//     echo "not valid age";
// }


// $gender = 'male' ;

// if($gender == 'male'){
//     echo "welcome mr" ;
// }

// elseif($gender == 'female'){
//     echo "Hello";
// }

// else{
//     echo "invalid";
// }



/*******************  Nested if ************************ */
// if($age > 20){

//  echo "Welcome at Summer tanning   <br>";

//     if($gender == 'male'){
//          echo "welcome mr" ;
//     }

// }


///////////////////////////////////////////////////

// $gender = 'male' ;

// if($gender == 'female'){
//     echo "Welcome";
// }

// else{
//     echo "invalid";
// }

////////////////////////////// ternary operator  Short if //////////////////////////////////////////

// $age = 10 ;

// if($age >= 19 ){
//     echo "hi";
// }
// else{
//     echo "invalid age";
// }

// echo   $age >= 19 ? "hi"  : "invalid age" ;


/*************************************************************************** */

// if(' '){    // default true
//     echo "hi" ;
// }
// else{
//     echo "invalid";
// }


////////////////////////////////////////////////////


// if(false){    // false
//     echo "hi" ;
// }
// else{
//     echo "invalid";
// }

// $error = [] ;

// if($error){  

// }


// if(){   //  syntax error,

// }

///////////////////////////////  PHP if Operators  //////////////////////////////////////////////
/**
 * ==   value  
 * ===   value datatype
 * !=    value
 * !==    value datatype
 */

// $gender = "male" ;

// if($gender == "female"){

// }

// $x = 50;    //datatype=>  integer   value => 5

// $y = '5';   //datatype=>  string    value => 5

//  if($x <> $y){
//     echo "Equal" ;
//  }

// else{
//       echo "Not Equal" ; 
// }

// $username = 'r';

// echo gettype($username);   





/////////////////////////////  PHP Logical Operators    ///////////////////////////////////////////////////////////

// $age = 13 ;
// $gender = 'male' ;

// if($age >15 || $gender == 'male'){
//     echo "true ";
// }



// $a = 5;
// //   false  ||   false  || false ||    true  ||   false ||   false     => true
// if ($a == 2 || $a == 3 || $a == 4 || $a == 5 || $a == 6 || $a == 7) {
//   echo "$a is a number between 2 and 7";
// }



////////////////////////////////////// PHP switch Statement  /////////////////////////////////////////////////////////////////


// $day = 1;

// if ($day == 1) {
//     echo "Saturday";
// } elseif ($day == 2) {
//     echo "Sunday";
// } elseif ($day == 3) {
//     echo "monday";
// } elseif ($day == 4) {
//     echo "thr";
// } elseif ($day == 5) {
//     echo "wed";
// } elseif ($day == 6) {
//     echo "tu";
// } elseif ($day == 7) {
//     echo "fri";
// } else {
//     echo "invalid";
// }


//////////////////////////////

// $day = 3;
// switch($day){
//     case 1 :
//          echo "Saturday";
//          break ;

//              case 2 :
//           echo "Sunday";
//          break ;

//              case 3 :
//          echo "monday";
//          break ;

//              case 4 :
//          echo "thr";
//          break ;

//             case 5 :
//          echo "wed";
//          break ;

//             case 6 :
//            echo "tu";
//          break ;

//             case 7 :
//            echo "fri";
//          break ;

//          default:
//           echo "invalid";
// }


////////////  DRY   don`t repeat yourself ////////////////////////////////////////

$fruit = 'apple';

switch($fruit){

case 'apple' : 

case 'orange' : 

case 'mango' : 
   echo "this is a fruit" ;
   break ;   


case 'tomato' : 

case 'botato' : 
   echo "this is a vegetable" ;
   break ;   


  default:
  echo "invalid"; 

}