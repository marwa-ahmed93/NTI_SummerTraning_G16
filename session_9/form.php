<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    


<!-- <form method="post" action="index.php" class="w-75 m-auto my-4"
 enctype="multipart/form-data">
  


  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Upload Image</label>
    <input type="file" name="image" class="form-control" id="exampleInputPassword1">
  </div>



  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
 -->




<?php
session_start();
if(isset( $_SESSION['errors'])){
  foreach( $_SESSION['errors'] as $error){
?>
<div class="alert alert-danger w-75 m-auto my-4"> <?php  echo $error ."<br>"; ?> </div>

<?php
  }
  unset($_SESSION['errors']);
}

?>


<form method="post" action="index.php" class="w-75 m-auto my-4">

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">User Name</label>
    <input type="text" name="username" class="form-control" id="exampleInputPassword1">
  </div>


  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">User Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
  </div>



    <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">User Email</label>
    <input type="email" name="email" class="form-control" id="exampleInputPassword1">
  </div>



    <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">User Age</label>
    <input type="number" name="age" class="form-control" id="exampleInputPassword1">
  </div>



  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>













<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>