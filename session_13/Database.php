<?php


interface Database{

public function selectAll($column , $table);
public function selectOne($column , $table , $condation , $opertaors , $value);
public function Insert();
public function Update();
public function Delete();


}















// class Database{

// private static $dsn ="mysql:host=localhost;dbname=nti_online_g16" ;

// public static function getConnection(){
//     return new PDO(self::$dsn , 'root' , '') ;
// }


// }


// Database::getConnection();