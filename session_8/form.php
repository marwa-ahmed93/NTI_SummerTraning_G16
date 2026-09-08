<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
  </head>
  <body>


<!-- <form  method="post"  action="index.php" class="w-75 m-auto my-4" >
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form> -->







<!-- <form  method="post"  action="index.php" class="w-75 m-auto my-4" >
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Enter Number_1</label>
    <input type="number" name="num1" class="form-control" id="exampleInputEmail1" >
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Enter Number_1</label>
    <input type="number" name="num2" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label class="form-check-label" for="exampleCheck1">Choose Operators</label>
<select class="form-control" name="operators" id="">
    <option value="+">+</option>
    <option value="-">-</option>
    <option value="*">*</option>
    <option value="/">/</option>
</select>

  </div>
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form> -->








<?php 
session_start();

if(isset( $_SESSION['errors'])){

foreach( $_SESSION['errors'] as $error){
  
?>
<div class="alert alert-danger w-75 m-auto my-3"> <?php echo $error ."<br>" ; ?>  </div>
  
<?php

}

unset( $_SESSION['errors']);
}

?>



<form  method="post"  action="index.php" class="w-75 m-auto my-4" >
  
    <div class="mb-3">
    <label for="username" class="form-label">Enter Name</label>
    <input type="text" name="name"
     value="<?php if(isset($_COOKIE['username'])) echo $_COOKIE['username'] ;?>" class="form-control" id="username" >
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Enter password</label>
    <input type="password" name="password"
     value="<?php if(isset($_COOKIE['password'])) echo $_COOKIE['password'] ?>" class="form-control" id="exampleInputPassword1">
  </div>
 

  <div class="mb-3 form-check">
    <input type="checkbox" name="remember_me" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label"  for="exampleCheck1">Remember Me</label>
  </div>

  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>


















    
    <script src="js/bootstrap.bundle.min.js" ></script>
  </body>
</html>