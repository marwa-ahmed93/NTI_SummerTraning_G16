<?php

session_start();

echo  "Welcome ".$_SESSION['username'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>

  <a class="btn btn-danger m-3" href="logout.php">Logout</a>
    
</body>
</html>