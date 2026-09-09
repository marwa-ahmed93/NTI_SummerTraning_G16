<?php



//////////////////////////// _FILES  //////////////////////////////////
// echo "<pre>";

// print_r($_FILES);


// $_FILES = [

// 'image' => ['name'=>'' ,  'tmp_name' =>''   ]
// ];

// $_FILES['image']['name'];
// $_FILES['image']['tmp_name'];



// if (isset($_POST['submit'])) {

//     $image =  $_FILES['image'];

//     $image_name = $image['name'];
//     $tmp_name = $image['tmp_name'];


//     $ext =  pathinfo($image_name, PATHINFO_EXTENSION);

//     $new_name = uniqid() . "." . $ext;

//     move_uploaded_file($tmp_name, $new_name);
// }










//////////////////////////////  Request   /////////////////////////////////




// $name =  $_POST['name'] ;
// $username =  $_GET['username'] ;

// echo $name ;
// echo $username ;

// print_r($_REQUEST);

// echo $_REQUEST['name'] ."<br>" ;   //get
// echo $_REQUEST['name'] ."<br>" ;   //post




// echo  $_POST['name']  ."<br>"; 

// echo  $_GET['username'] ."<br>" ;

// echo "<pre>";
// print_r($_REQUEST);

//  echo "Request Get ". $_REQUEST['username'] ."<br>";
//  echo  "Request Post ". $_REQUEST['name'] ."<br>";


//////////////////////////////////// PHP Filter Functions ///////////////////////////////////////////////////////


// $email = "a           hmed@gmail.com";

// echo filter_var($email ,FILTER_SANITIZE_EMAIL );  // true  or false



// $age = 29 ;

// echo filter_var($age , FILTER_VALIDATE_INT,['options' => ['min_range'=> 10  , 'max_range'=>30] ]);


// $name = $_POST['name'];


// $username = "Zain";

// echo  filter_var($username , FILTER_VALIDATE_REGEXP ,['options'=>[ 'regexp'=> '/^[A-Z][a-z]{3,8}$/'  ]]) ;











///////////////////////////    _SERVER  ///////////////////////////////////////////////////////////
// echo "<pre>";
// print_r($_SERVER);
session_start();

include('validate.php');

if($_SERVER['REQUEST_METHOD'] == 'POST'){

     $errors =[] ;

   foreach($validates as  $validate_name => $validate_value){

    $value =   filter_input(INPUT_POST , $validate_name  , $validate_value['filters'] , $validate_value['my_options'] ) ;
 

    if(empty($_POST[$validate_name])){
          $errors[$validate_name] = "You Must Fill $validate_name" ;
    }

    elseif($value == false ){
        $errors[$validate_name] = $validate_value['error'] ;
    }


   }

   if($errors){
    $_SESSION['errors'] = $errors ;
    header('location:form.php');
    exit();
   }



$_SESSION['username'] = $_POST['username'] ;
  header('location:home.php');

}