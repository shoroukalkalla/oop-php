<?php

// require_once "classes/User.php";

// WITHOUT CONSTRUCTOR //
// $shorouk = new User;
// $shorouk->name = "shorouk";
// $shorouk->email = "shorouk@mail.com";
// $shorouk->age = "25";

// WITH CONSTRUCTOR //
// $shorouk = new User("shorouk", "shorouk@mail.com", 25);
// $shorouk->birthdayGreet();
// $shorouk->updateEmail("new@new.com");

// var_dump($shorouk);
// echo $shorouk->is_admin;

// ******************************************************** //

// require_once "classes/MySQL.php";

// $my1 = new MySQL("localhost", "root", "password", "blog");

// $my1->test();
// var_dump($my1);

// ******************************************************** //

// require_once "classes/Son.php";

// $dad = new Dad;
// $son = new Son;

// $dad->tryDad();
// $son->trySon();

// ******************************************************** //

//abstract:
//---------
// require_once 'classes/Db.php';
// require_once 'classes/MySQL.php';
// require_once 'classes/SqlServer.php';

// $db1 = new Db('localhost', 'root', 'password', 'blog');

// $db1 = new MySQL('localhost', 'root', 'password', 'blog');
// $db1->read();

// function add(int $x)
// {
//     echo ($x + 2);
// }

// add("ahmed"); //error


// ******************************************************** //

//interface:
//----------

// interface Payment
// {
//     function deduct();
// }

// class Visa implements Payment
// {
//     public function deduct()
//     {
//         echo "deducted from visa <br/>";
//     }
// }

// class Mcard implements Payment
// {
//     public function deduct()
//     {
//         echo "deducted from master card <br/>";
//     }
// }

// function buy(Payment $pay)
// {
//     $pay->deduct();
//     echo "your order completed successfully <br/>";
// }

// $v1 = new Visa;
// buy($v1);
// buy(new Mcard);

// ******************************************************** //

//static:
//-------
// class Buyer
// {
//     protected $name;
//     static protected $max_credit = 1000;
// }

// class Vipbuyer extends Buyer
// {
//     static public function increaseMaxCredit()
//     {
//         echo (Buyer::$max_credit + 10000);
//     }
// }

// Vipbuyer::increaseMaxCredit();

// ******************************************************** //

//method chaining:
//----------------
// class Num
// {
//     public $num;

//     public function __construct($num)
//     {
//         $this->num = $num;
//     }

//     public function addOne()
//     {
//         $this->num += 1;
//         return $this;
//     }

//     public function addTwo()
//     {
//         $this->num += 2;
//         return $this;
//     }

//     public function addThree()
//     {
//         $this->num += 3;
//         return $this;
//     }
// }

// $x = new Num(5);
// $x->addOne();
// $x->addThree();
// $x->addOne();
// $x->addTwo();
// echo $x->num;

// $x->addOne()->addThree()->addOne()->addThree();
// echo $x->num;

// ******************************************************** //

// class Username
// {
//     public $name;

//     public function __construct($name)
//     {
//         $this->name = $name;
//     }
//     public function clean()
//     {
//         $this->name = trim(htmlspecialchars($this->name));
//         return $this;
//     }
//     public function greet()
//     {
//         echo "Hello $this->name";
//     }
// }

// $username = new Username("<h1>shorouk</h1>");
// $username->clean()->greet();

// ******************************************************** //

// require_once 'classes/UserA.php';
// require_once 'classes/UserB.php';
// require_once 'classes/Product.php';

// $user1 = new A\User;
// $user2 = new B\User;

// use A\Product;
// $p = new A\Product; //without using "use A\Product" 
// $p = new Product; //with using "use A\Product" 

// use A\User as UserA; //alias
// use B\User as UserB; //alias

// $user1 = new UserA;
// $user2 = new UserB;

// ******************************************************** //
