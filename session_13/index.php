<?php


///////////////////   OOP  ////////////////////////////////////////////////////
/**
 *1-Encapsulation
*2-Inherits
*3-polmarphetem
*4-abstraction
 */




//////////////////////////////////////////////////////

// class Car{

//  public $model ;
//  public $color ; 
//  public $speed ; 


//  public function __construct($model , $color, $speed )
//  {
//     echo $this->model = $model  ."<br>";
//    echo  $this->color = $color  ."<br>";
//    echo  $this->speed = $speed ."<br>" ;
//  } 

//  public function drive()  {
//     echo "The car model is: $this->model  and The car color is : $this->color and car speed is $this->speed " ;
//  }

//  public function engine()  {
//     echo "start engine" ;
//  }



//  public function __destruct()
//  {
//     echo "final" ;
//  }
// }

// $car =  new Car('BMW' , 'RED' , 111);   // hi
// // echo gettype($car);  //object

// // echo  $car->model = "BMW"  ."<br>" ;
// // echo $car->color = "RED" ."<br>" ;
// // echo $car->speed = 120  ."<br>";

// $car->drive();     //method


// // drive()   //function
// echo "<hr>" ;


// $car2 =  new Car('Toyota' , 'white' , 120);   //hi

// echo  $car2->model = "Toyota"  ."<br>" ;
// echo $car2->color = "Black" ."<br>" ;
// echo $car2->speed = 120  ."<br>";

// $car2->drive(); 









////////////////////////////  Inherits  ///////////////////////////////////////////////

// class Animal{

//     public $name ;
//     public $age ;


//     public function makeSound(){
//           echo "HOW HOW" ;
//     }

//       public function eat(){
//            echo "Eat" ;
//     }
// }


// class German{} 

// class Dog extends Animal {}

// $dog = new Dog ;
// echo  $dog->name = "German" ."<br>" ; 
// echo $dog->age = 1  ."<br>" ;
// $dog->makeSound()  ;
// echo "<br>" ; 
// $dog->eat() ;


// echo "<hr>" ;






// class Cat extends Animal{
//     #[Override]
//     public function makeSound()
//     {
//         echo "meow meow ";
//     }
// }
// $cat = new Cat ;
// $cat->name = "lion"  ; 
// $cat->age = 1.5 ;
// $cat->makeSound(); 




/////////////////////////////////  Trait /////////////////////////////////////////////////////

// trait  Dog{

// public function eat(){
//     echo "eat" ;
// } 
// }
// trait German{
//     public function play()  {
//        echo "play" ; 
//     }




// }


// class Lion{
//     use Dog ;
//     use German ;
// }

// $l = new Lion; 
// $l->eat();
// $l->play();








//////////////////////////  construct  //////////////////////////////////////



// class Animal{

// public $color ;
// public $age ; 

// public function __construct($color= "black" , $age = 1){
//      $this->color =  $color ;
//      $this->age =  $age ;
// }

// public function play(){
//     echo "Animal color is: $this->color and age is: $this->age" ;
// }

// }


// class Dog extends Animal{
//    public $name ;

   

// 	public function __construct($name)
//     {
//         $this->name = $name ;

//         return parent::__construct( 'White', 1.5 );
//     }


// public function greet(){

//     echo $this->name ;
// }

// }

// $dog = new Dog('german') ;

// $dog->play();   //animal   parent
// $dog->greet() ;   //child 





//////////////////////////////// Abstract  ////////////////////////////////////////////////////////////////

/**
 * abstract method
 * abstract class
 *  */ 


// abstract class Animal{

//    public $name ;
//    public function eat(){}

// //  abstract public function go() ;
//  abstract public function makeSound();

// }

// class Dog extends Animal{
// //   #[Override]
// //   public function go()
// //   {
// //       echo "GO";
// //   }

// #[Override]
// 	public function makeSound()
//     {
//         echo "HOW HOW"  ;
//     }


// }


// class Cat extends Animal{
 
//    #[Override]
//    public function makeSound()
//    {
//     echo "MEOW MEOW ";
//    }



//    #[Override]
//    public function eat()
//    {
//    echo "eat" ;
//    }
// }




///EX_1

// abstract class PaymentGateway{
//     abstract public function pay($amount) ;
// }

// class Paypal extends PaymentGateway{
//    #[Override]
//    public function pay($amount)
//    {
//       echo "Payed With Paypal  $amount" ;
//    }
// }

// class Stripe extends PaymentGateway{
   
//    #[Override]
//    public function pay($amount)
//    {
//       echo "Payed With Stripe  $amount" ;
//    }

// }


// function processpayemnt($gateway , $amount){
//    echo $gateway->pay($amount) ;
// }

// processpayemnt(new Paypal , 3000);
// echo "<br>";
// processpayemnt(new Stripe , 5000);


// $s = new Stripe ;
// $s->pay(2000);


// $p = new Paypal ;
// $p->pay(2000);
// echo "<br>";




//////////////////////////////////  constant /////////////////////////////////////////////////////


// class User{
//     const ROLE = 'user' ;   //default public
//      public $name ;
//     public function getRole(){
//        $this->name ;
//     //    return  User::ROLE ;
//     return self::ROLE ;
//     }

// }



/////////////////////////////////// Encapsulation  ///////////////////////////////////////////////
/**  access modifier
 * 
 * public 
 * private
 * protected
 * 
  */

// class Car{
//    // private $model ;  //global scope
//     protected $model ;  //global scope
//     public function move($model){
//         echo "   move" ;
//         $this->model = $model ;
//     }
// }
// class Move extends Car{

//     public function move($model){
//         echo "   move" ;
//         $this->model = $model ;
//     }
// }

// $car = new Car ;
// $car->model =  "mm" ; 



//////EX_2
//ster 
//geterr


// class BanckAccount{

//    private $balance ;  //1000

//    public function setBalance($balance){
//            $this->balance = $balance ;
//    }

// public function getBalance(){
//     return $this->balance ;
// }

// }
// $account = new BanckAccount();
// echo $account->getBalance() ;  //0
// echo "<br>" ;
// $account->setBalance(1000);

// echo $account->getBalance() ;   //1000



///////////////////////////////////// Final   /////////////////////////////////////////////


// final class Animal{
//   final public function move(){
//         echo "move" ;
//     }
// }


// class Dog extends Animal{
//     // #[Override]
//     // public function move()
//     // {
//     //     return parent::move();
//     // }
// }
 


////////////////////////////////////// interface /////////////////////////////////////


// interface PaymentMethod{

//  public function paypal();
//  public function stripe();

// }

// interface Pay{
//     public function pay();
// }

// class Paypal implements PaymentMethod  , Pay {

//  public function paypal(){}
//  public function stripe(){}
//  public function pay() {}

// }











////////////////////////////////////////////////////////////////////////
/**
 *                object        abstract_method     probity     method     access_modifier
 *  
 * class           yes               NO              YES          YES       public private protected                         
 * 
 * abstract        No               Yes              YES          YES         public  protected
 * 
 * interface       No               YES               NO          NO               public
 * 
 *  */                




///////////////////////////////////// Method chaining   //////////////////////////////////////////////



// class Calc{

// private $result ; 

// public function sum($a , $b) {
//     $this->result = $a + $b ;
//      return $this ;
// }


// public function sub($a ) {
//     $this->result -= $a;
//     return $this ;
// }

// public function mult($a) {
//     $this->result *= $a  ;
//      return $this ;
// }

// public function div($a) {
//     $this->result /= $a ;
//      return $this ;
// }

// public function result(){
//     echo $this->result;
// } 

// }

// $calc = new Calc();
// $calc->sum(10 ,20 )->sub(10)->mult(10)->div( 2 )->result();

// $calc->sub(10 ,20 );
// $calc->mult(10 ,20 );
// $calc->div(10 ,20 );






//////////////////////////////////////// poly  //////////////////////////////////////////////
/**
 * override
 * overloading    x
 */


// class Animal{
//     public function makeSound(){
//         echo "how how";
//     }


//  }

// class Cat extends Animal{
   
// #[Override]
// 	public function makeSound()
//     {
//         echo "meow meow";
//     }


// //overloading   x
   
//  public function calc($a = 1 , $b = 1 ,$c = 1 ){
//   $result = $a*$b*$c;
//   echo $result ;
// }




// // public function calc($a , $b  ){
// //   $result = $a+$b;
// //   echo $result ;
// // }
// // public function calc($a ){
// //   $result = $a+$b;
// // //   echo $result ;
// // }

// }


// $cat = new Cat('');
// $cat->calc(10);            // 10  1  1
// $cat->calc(10 ,20);       // 10  20  1
// $cat->calc(10 ,20,10);   // 10 20 10



////////////////////////////////////////////////////////////////////////
/**************************  Static ********************************************************* */


// class Calc{

// public static $count = 1;

// static function count(){
//    echo self::$count++ ;
// } 

// }

// // $c = new Calc();


// Calc::count();
// Calc::count();
// Calc::count();



// class Calc{
//   public static  $count = 1 ;

//   public static function count(){
//     echo  self::$count++ ."<br>" ;
//   }
// }
// // $calc = new Calc();
// // $calc->count();

// Calc::count();
// Calc::count();
// Calc::count();
// Calc::count();
// Calc::count();
// Calc::count();
// Calc::count();



// Class User{
//     const ROLE = "User" ; 
//   public function greet(){
//        echo self::ROLE ;
//     }

// }
// class Admin extends User{
//     #[Override]
//     public function greet()
//     {
//         return parent::greet();
//     }
// }


// $name = "ahmed" ;
// $name = "mohmaed" ;

// const NAME = "zain" ;












/////////////////////////////////////////////////////////////////////////////
/*************************  namespacing ********************************* */





// require 'Admin/User.php' ;
// require 'Customer/User.php' ;

// use Admin\User ;
// use Customer\User  as customer;

// $a = new User() ;
// $a->user(); 

// echo "<hr>";

//  $c =  new customer() ;
//  $c->User();

// class User{}
// class User{}








///////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////  Connection database   /////////////////////////////////////////////////////

///-------------------1-----------
 
// $connection =  mysqli_connect('localhost','root' , '','nti_online_g16') ;

// $query = "SELECT * FROM `customers`" ;

// $result =  mysqli_query($connection , $query) ;

// $data =  mysqli_fetch_all($result , MYSQLI_ASSOC) ;

// echo "<pre>" ;
// print_r($data);


////---------2-------

// $connection  = new mysqli('localhost','root' , '','nti_online_g16') ;

// $query = "SELECT * FROM `customers`" ;

// $result =  $connection->query($query) ;

// $data =  $result->fetch_all(MYSQLI_ASSOC) ;

// echo "<pre>" ;
// print_r($data);


////------------3------------------
/*****************************  PDO =>   php data object  **************************************************** */
//// ----------  select   ----------------

// $connection = new PDO("mysql:host=localhost;dbname=nti_online_g16", "root" ,'');

// $query = "SELECT * FROM `customers`" ;

// $result =   $connection->query($query) ;

// $data = $result->fetchAll(PDO::FETCH_ASSOC);

// echo "<pre>" ;
// print_r($data);


//---insert --------

//  $dsn = new PDO(dsn:"mysql:host=localhost;dbname=nti_online_g16",username: "root" ,password:'');

//  $query = "INSERT INTO departments(`name`) VALUES(:name)" ;

// $result =  $dsn->prepare($query);  // 1

// $departName = "Frontend" ;
//  $result->bindParam(':name' , $departName );
// $result->execute();
// $result->execute(['name'=> $departName]);   //1
