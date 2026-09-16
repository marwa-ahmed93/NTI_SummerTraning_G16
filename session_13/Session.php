<?php

class Session{

public function __construct()
{
 session_start();
}

public function setSession($key , $value){
    $_SESSION[$key] = $value ;
}

public function getSession($key){
    return  $_SESSION[$key] ;
}

public function removeSession($key){
    unset($_SESSION[$key]) ;
}


public function destroy(){
    session_destroy();
}

}





// $errors =[] ;

// $_SESSION['errors'] = $errors ;
// $_SESSION['username'] = $_POST['name'] ;
// $_SESSION['email'] = $_POST['email'] ;


// echo "welcome".  $_SESSION['username'];