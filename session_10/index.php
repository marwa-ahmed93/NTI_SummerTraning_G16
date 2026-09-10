<?php


/** types of error
 * warning
 * fatal error
 * syntax error
 * notice
 * deprecated error
 * 
 */



/////////////////  warning & notice  /////////////////////////////
// echo $x ;

// include('test.php');


// echo "Welcome" ;


///////////////// syntax error  /////////////////////////////

// echo "Welcome" ;
// echo "Welcome" 
// echo "Welcome" ;
// echo "Welcome" ;


///////////////// fatal error  /////////////////////////////

// echo "m"+ "s" ;

// require('test.php');

// echo "Welcome" ;


// $x = 10;


// function calc(){
//     echo "hi";
// }



//////////////////////// difference between double quotes and single quotes ///////////////////////////////////

// echo "Hello  <br>";
// echo 'Hello';



// $x = "John";
// echo "Hello $x"; // Returns Hello John

// echo "<hr>";

// $x = "John";
// echo 'Hello '.$x; // Returns Hello John












///////////////////////////// Files  /////////////////////////////////////////////////////


// readfile('text.txt');



//////////// fopen(filename , mode)  mode =>(r , w , a)  ////////////////////////////////

////read
// $file =   fopen('text.txt' , 'r');  ///Resource 
// echo fread($file , filesize('text.txt')/2);
// fclose($file);



//////write
// $file =   fopen('text.txt' , 'w');  ///Resource 
// echo fwrite($file , "  Welcome NTI Full STACK PHP LARAVEL  ");
// fclose($file);





////a
// $file =   fopen('text.txt' , 'a');  ///Resource 
// echo fwrite($file , "  Welcome NTI Full STACK PHP LARAVEL  ");
// fclose($file);


//  $file =   fopen('text.txt' , 'r');
// // echo fgets($file);


// while($line = fgets($file)){
//     echo $line ."<br>";

// }



///////////////////////////////////////////////////////////////
