<?php

require "dbc.php"  ;
   
 $query =     "SELECT * FROM `customers` ORDER BY id Desc" ;

 $result =    mysqli_query($connection ,$query) ;


// $data  = mysqli_fetch_assoc($result) ;   //associative array   return one row
// //  echo "<pre>";
// //  print_r($data);

// // die();

 $customers  = mysqli_fetch_all($result , MYSQLI_ASSOC ) ; //indexed array    return all data

//  echo "<pre>";
//  print_r($customers);



// die();

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
    

<div class="container-fluid mt-5">

  <div class="w-75 m-auto my-3"> <a class="btn btn-primary w-100" href="create.php">Create </a></div>



        <table class="table table-dark table-striped">
    <thead>
        <th>index</th>
        <th>first_name</th>
        <th>last_name</th>
        <th>email</th>
        <th>gender</th>
        <th>money</th>
        <th>city</th>
        <th>country</th>
        <th>Show</th>
        <th>Update</th>
        <th>Delete</th>
    </thead>


<tbody>

<?php  
$i = 1 ;
  foreach($customers as $customer){ 
//while($row = mysqli_fetch_assoc($result)){

?>
   <tr>
        <td><?php  echo $i++ ?> </td>
        <td><?php  echo $customer['first_name'] ?> </td>
        <td><?php  echo $customer['last_name'] ?> </td>
        <td><?php  echo $customer['email'] ?> </td>
        <td><?php  echo $customer['gender'] ?> </td>
        <td><?php  echo $customer['money'] ?> </td>
        <td><?php  echo $customer['city'] ?> </td>
        <td><?php  echo $customer['country'] ?> </td>
        <td><a class="btn btn-info" href="selectOne.php?id=<?php echo $customer['id'] ?>">show</a></td>
        <td><a class="btn btn-warning" href="update.php?id=<?php echo $customer['id'] ?>">Update</a></td>
        <td><a class="btn btn-danger" href="delete.php?id=<?php echo $customer['id'] ?>">Delete</a></td>
       
    </tr>

    <?php  } ?>

 




</tbody>


</table>
    </div>







<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>