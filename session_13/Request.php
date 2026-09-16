<?php

class Request{
 
  public function getData($key){
       return   $_GET[$key]  ;  //marwa   zain //ahmed
  }


    public function postData($key , $value){
       $_POST[$key] = $value  ; //marwa   zain //ahmed
  }

}


$_POST['mm'] = 'mm';

