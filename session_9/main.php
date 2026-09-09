<?php
// echo "WELCOME";


/** types of error
 * warning
 * fatal error
 * syntax error
 * notice
 * deprecated error
 * 
 */

// echo "this is my name \"marwa\" ";



/**
 * /^[A-Z]{2}/   RT    KL
 * 
  * /ab/     akob  

 * /a/
 * /[ab]/
 * /[abcdef]/
 * /[a-z]/
 * /[3a-z#]/
 * /[0-9a-z_]/
 * /web[design development]/
 * /web\s?(design | development)/   
 * ? zero ar one
 * /[A-Z][a-z][a-z][a-z][A-Z]/
 * /[A-Z][a-z]{3}[A-Z]/
 * /[a-z]{5}/
 * /[a-z]{3,8}/
 * /^01[0125][0-9]{8}$/
 * /^(002)?01[0125][0-9]{8}$/
 * /^(\+2|002)?01[0125][0-9]{8}$/
 * 
 * ?   zero ar one
 * + one or more
 *  * zero or more
 * 10 =>80
 * 10 =>79     | 80   [1-7][0-9]
 * 1  0
 * 2   
 * 3
 * 
 * 7  9
 * 
 * 0-10
 * 10-79
 * 
 * 10    [1-7][0-9]  10-79
 * 
 * 79
 * ^([1-7][0-9]|80)
 * 
 * /./
 * /.{6}/
 * /\s/
 * / /
 * /\S/
 * / \s/
 * /\d /
 * /\D/
 * /\w/
 * /\W/  [0-9a-z_]
 * /\s/
 * /\d/ [0-9]
 * 
 * 
 * (?)  zero ar one
 * (+) one or more
 * (*) zero or more
 * 
 */


// function RouteRandomPass($length) {
//     $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
//     $randomString = "";

//     for ($i = 0; $i < $length; $i++) {
//         $randomIndex = random_int(0, strlen($chars) - 1);
//         $randomString .= $chars[$randomIndex];
//     }

//     return $randomString;
// }
// echo RouteRandomPass(3);

// print_r($_REQUEST);
// setcookie("test", "hello");





/**  10 => 80   10=>79
 *10
 *23
 *79    [1-7][0-9]  => 10  79 
 * ^([1-7][0-9] | 80)$
 * 
 */