<?php

require 'Database.php' ;

class Mysql implements Database{

private $connection ;

public function __construct($dsn , $username , $password)
{
  $this->connection = new PDO($dsn , $username , $password) ; 
}

public function selectAll($column , $table){
   
  $query = "SELECT $column FROM $table" ;

 $result =  $this->connection->query($query) ;

 $data =  $result->fetchAll(PDO::FETCH_ASSOC) ;

echo "<pre>" ;
print_r($data);


}
public function selectOne($column , $table , $condation , $opertaors , $value){

$query = "SELECT $column FROM $table WHERE $condation $opertaors  $value" ;
 $result =  $this->connection->query($query) ;

 $data =  $result->fetch() ;

 echo "<pre>" ;
 print_r($data);

}
public function Insert(){}
public function Update(){}
public function delete(){}



}


$mysql = new Mysql('mysql:host=localhost;dbname=nti_online_g16' , 'root','');
// $mysql->selectAll('name' , 'departments');
$mysql->selectOne('name' , 'employees' , 'id' , '=' , 7);
