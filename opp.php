<?php
// class dongvat
// {
//     public $ten;
//     public $hanhdong;
//     public $tuoi;
// }
// $conmeo = new dongvat();
// $conmeo->ten = "small";
// $conmeo->hanhdong = "cào";
// $conmeo->tuoi = 4;

// class sieunhan
// {
//     public $ten;
//     public $mausac;
//     public $sucmanh;
//     function sayhi()
//     {
//         return " Toi la sieu nhan";
//     }
//     function thuoctinh()
//     {
//         $s = $this->ten;
//         $s .= "";
//         $s = $this->mausac;
//         $s .= "";
//         $s = $this->sucmanh;
//         return $s;
//     }
// }
// $nguoisat = new sieunhan();
// $nguoisat->ten = "david";
// $nguoisat->mausac = "red";
// $nguoisat->sucmanh = 50;

// echo $nguoisat->thuoctinh();
// echo "<br>";
// echo $nguoisat->sayhi();

//116
// class sieunhan
// {
//     public $ten;
//     public $sucmanh;
//     function ganGiaTri($a, $b)
//     {
//         $this->ten = $a;
//         $this->sucmanh = $b;
//     }
// }
// $iroman = new sieunhan();
// $iroman->ganGiaTri("david", 50);
// echo $iroman->ten;
// echo $iroman->sucmanh;
// $iroman = new sieunhan();
// $iroman->ten = "David";
// $iroman->sucmanh = 50;
// echo $iroman->ten;
// echo $iroman->sucmanh;

//117
// class sieunhan
// {
//     public $ten;
//     public $sucmanh;
//     function sieunhan($a, $b)
//     {
//         $this->ten = $a;
//         $this->sucmanh = $b;
//     }
// }
// $iroman = new sieunhan("david, 50");

// echo $iroman->ten;
// echo $iroman->sucmanh;

//118
// class sieunhan
// {
//     public $ten;
//     public $sucmanh;

//     function sieuNhan($a, $b)
//     {
//         $this->ten = $a;
//         $this->sucmanh = $b;
//     }
// }
// $iroman = new sieunhan("david", 80);
// $batman = new sieunhan("better", 50);
// $superman = new sieunhan("dũng", 50);

// echo $iroman->ten . $iroman->sucmanh;
// echo $batman->ten . $batman->sucmanh;
// echo $superman->ten . $superman->sucmanh;

//119
// class dongvat
// {
//     public $mat;
//     public $mui;
//     public $mieng;

//     function an()
//     {
//         echo ' Động vật đang ăn';
//     }
// }
// class conchau extends dongvat
// {
//     function gioithieu()
//     {
//         $this->mat = 'mắt đen';
//         $this->mui = 'mũi to';

//         parent::an();
//     }
// }
// $trauvang = new conchau();
// $trauvang->gioithieu();
// echo $trauvang->mat;
// echo $trauvang->mui;

//120 +121
// class dongvat
// {
//     var $mat = '';
//     var $mui = '';
//     var $mieng = '';
//     var $chan = '';
// }
// $conmeo = new dongvat();
// echo $conmeo->mat = "mắt tròn ";
// echo  $conmeo->mui = "mũi đen ";

//127
// class SinhVien
// {
//     function __construct($giatri)
//     {
//         echo $giatri;
//     }
// }
// $anhhuy = new SinhVien('HEllo world');
// class A
// {
//     function __construct()
//     {
//         echo 'Ham cua lop A';
//     }
// }
// class B extends A
// {
//     function __construct()
//     {
//         echo ' Ham cua class B';
//     }
// }
// $a = new B();

//129
// class MyClass
// {
//     function __construct()
//     {
//         echo 'world';
//     }
//     function __destruct()
//     {
//         echo 'hello';
//     }
// }
// $obj = new MyClass;

//114

//ke thua
// class dongvat
// {
//     public $mat;
//     public $mui;

//     function an()
//     {
//         echo 'Dong vat dang an';
//     }
// }

// class contrau extends dongvat
// {
//     function gioithieu()
//     {
//         $this->mat = 'mat den';
//         $this->mui = 'cao';

//         parent::an();
//     }
// }
// $trau = new contrau();
// $trau->gioithieu();
// echo $trau->mat;
// echo $trau->mui;

//var 
// class xemay
// {
//     protected $loaixe;
// }
// class xehonda extends xemay
// {
//     function thongtin()
//     {
//         echo  $this->loaixe = 'loai xe re tien';
//     }
// }

//ke thua long
// class A
// {
//     public $public_A = 'public';
//     private $private_A = 'private';
//     protected $protected_A = 'Protected';

//     public function showPublic()
//     {
//         echo $this->public_A;
//     }
//     private function showPrivate()
//     {
//         echo $this->private_A;
//     }
//     protected function showProtected()
//     {
//         echo $this->protected_A;
//     }
// }
// class B extends A {}
// class C extends B {}

// $doituong = new C();
// $doituong->showPublic();

//hammd5
// class A
// {
//     private $_username;
//     function getuSername()
//     {
//         return $this->_username;
//     }
//     function setUsername($username)
//     {
//         $this->_username = md5($username);
//     }
// }
// $a = new A();
// $a->setUsername('huy');
// echo $a->getUsername();


//ham khoi tao 
// class sinhvien
// {
//     function __construct($giatri)
//     {
//         echo $giatri;
//     }
// }
// $huy = new sinhvien('hello');


//ham khoitao va tinh ke thua 
// class A
// {
//     function __construct()
//     {
//         echo 'Ham A';
//     }
// }
// class B extends A
// {
//     function __construct()
//     {
//         echo ' Ham cua class B';
//     }
// }
// $a = new B();


//ham huy
// class MyClass
// {
//     function __construct()
//     {
//         echo 'doi tuong ';
//     }
//     function __destruct()
//     {
//         echo 'dooi tuong';
//     }
// }
// $obj = new MyClass;

//Class Abstract
// abstract class Person
// {

//     protected $ten;
//     protected $namsinh;

//     abstract public function showInfo();
// }
// class SinhVien extends Person {
//     public function showInfo()
//     {

//     }
// }

//Interface

// class HinhChuNhat
// {
//     public $cd;
//     public $cr;

//     public function __construct($chieudai, $chieurong)
//     {
//         $this->cd = $chieudai;
//         $this->cr = $chieurong;
//     }
//     public function tinhDienTich()
//     {
//         return $this->cd * $this->cr;
//     }
// }
// $hcn = new HinhChuNhat(5, 3);
// echo   $hcn->tinhDienTich();


//khai báo tạo object từ class
// class A
// {
//     public $name;
//     public $age;

//     function sayHelo()
//     {
//         echo "xin chao toi la $this->name";
//     }
// }

// $obj = new A();
// $obj->name = "huy";
// $obj->age = 28;
// $obj->sayHelo();
// ----------------
// class Car {
//     public $brand;
//     public $color;
//     public $speed;

//     public function showInfo() {
//         echo "Hãng: $this->brand, Màu: $this->color, Tốc độ: $this->speed km/h";
//     }
// }

// $car1 = new Car();
// $car1->brand = "Toyota";
// $car1->color = "Đỏ";
// $car1->speed = 120;
// $car1->showInfo();


//public
// class Person {
//     public $name = "Nam";

//     public function sayHi() {
//         echo "Xin chào, tôi là $this->name";
//     }
// }
// $p = new Person();
// echo $p->name;       // ✅ OK
// $p->sayHi();         // ✅ OK

//cocstructor
// class Person {
//     public $name;
//     public function __construct($name) {
//         $this->name = $name;
//     }
//     public function sayHello() {
//         echo "Xin chào, tôi là $this->name";
//     }
// }
// $p = new Person("Lan");
// $p->sayHello(); // Kết quả: Xin chào, tôi là Lan

// __destruct
// ();
// class FileHandler {
//     public function __construct() {
//         echo "Mở file...<br>";
//     }

//     public function read() {
//         echo "Đọc dữ liệu từ file...<br>";
//     }

//     public function __destruct() {
//         echo "Đóng file và giải phóng bộ nhớ.<br>";
//     }
// }

// $f = new FileHandler();
// $f->read();
// Khi chương trình kết thúc hoặc biến $f bị unset, __destruct() sẽ tự chạy

//ke thua 

// class A
// {
//     public $name;
//     public function ten()
//     {
//         echo "$this->name phát ra âm thanh.";
//     }
// }
// class B extends A
// {
//     public function gioithieu()
//     {
//         echo "$this->name sua : Gau!";
//     }
// }
// $dog = new B();
// $dog->name = "milu";
// $dog->ten();
// echo "<br>";
// $dog->gioithieu();

//ghi de
// class A
// {
//     public function noi()
//     {
//         echo "dv...";
//     }
// }

// class B extends A
// {
//     public function noi()
//     {
//         echo "Meo";
//     }
// }
// $meo = new B();
// $meo->noi();
//goi lai phuong thuc cha voi parent 

// class A
// {
//     public function batdau()
//     {
//         echo "no may";
//     }
// }
// class B extends A
// {
//     public function batdau()
//     {
//         parent::batdau();
//         echo " xe chay";
//     }
// }
// $c = new B();
// $c->batdau();

//Interface
// interface TênInterface {
//     public function method1();
//     public function method2();
// }
//ex
// interface A
// {
//     public function aaa();
//     public function bbb();
// }
// class B implements A
// {
//     public function aaa()
//     {
//         echo "gau";
//     }
//     public function bbb()
//     {
//         echo "chay bag 4 chan";
//     }
// }

// $dog = new B();
// $dog->aaa();
// $dog->bbb();


//Abstract Class
// abstract class TênAbstract {
//     // Thuộc tính
//     public $name;

//     // Phương thức cụ thể
//     public function setName($name) {
//         $this->name = $name;
//     }

//     // Phương thức trừu tượng
//     abstract public function getInfo();
// }

//ex 
// abstract class A
// {
//     public $hang;
//     public function __construct($hang)
//     {
//         $this->hang = $hang;
//     }
//     public function batdau()
//     {
//         echo "$this->hang dang khoi dong<br>";
//     }
//     abstract public function xoa();
// }
// class B extends A
// {
//     public function xoa()
//     {
//         echo "$this->hang dang chay";
//     }
// }

// $oto = new B("Honda");
// $oto->batdau();
// $oto->xoa();

//ket hop i$a

// interface A
// {
//     public function log($message);
// }
// abstract class B
// {
//     protected $table;
//     abstract public function save();
// }

// class C extends B implements A
// {
//     public function __construct()
//     {
//         $this->table = "user";
//     }
//     public function save()
//     {
//         echo "save du lieu vao $this->table<br>";
//     }
//     public function log($message)
//     {
//         echo "Ghi log: $message<br>";
//     }
// }

// $user = new C();
// $user->save();
// $user->log("User created");

//bai tap thuc hanh 
// interface A
// {
//     public function f1();
// }

// abstract class B
// {
//     public $aaa;
//     public function __construct($aaa)
//     {
//         $this->aaa = $aaa;
//     }

//     public function f2()
//     {
//         echo " Day la : $this->aaa<br>";
//     }
//     abstract public function getInfo();
// }
// class C extends B implements A
// {
//     public $rong;
//     public $cao;

//     public function __construct($rong, $cao)
//     {
//         parent::__construct("hinh chu nhat");
//         $this->cao = $cao;
//         $this->rong = $rong;
//     }
//     public function f1()
//     {
//         return $this->rong * $this->cao;
//     }
//     public function getInfo()
//     {
//         echo "Chieu dai: $this->rong , Chieu rong : $this->cao<br>";
//     }
// }
// $obj = new C(3, 2);
// $obj->f2();
// $obj->getInfo();
//echo "Diện tích: " . $rect->calculateArea();

//Polymorphism 
//KẾ THỪA
// class A
// {
//     public function aaa()
//     {
//         echo "deww<br>";
//     }
// }
// class B extends A
// {
//     public function aaa()
//     {
//         echo "ddaaa<br>";
//     }
// }
// class C extends A
// {
//     public function aaa()
//     {
//         echo "ssas<br>";
//     }
// }
// $animals = [new B(), new C(), new A()];
// foreach ($animals as $animal) {
//     $animal->aaa();
// }
//ĐA HÌNH QUA INTERFACE 
// interface A
// {
//     public function f1();
// }
// class B implements A
// {
//     public function f1()
//     {
//         echo "ve hinh tron<br>";
//     }
// }
// class C implements A
// {
//     public function f1()
//     {
//         echo "Ve hinh vuong <br>";
//     }
// }
// $obj = [new B(), new A()];
// foreach ($obj as $obj) {
//     $shape->draw();
// }

//bai tap 
// interface PaymentMethod
// {
//     public function pay($amount);
// }

// class CreditCard implements PaymentMethod
// {
//     public function pay($amount)
//     {
//         echo "Thanh toán $amount VNĐ bằng thẻ tín dụng<br>";
//     }
// }

// class PayPal implements PaymentMethod
// {
//     public function pay($amount)
//     {
//         echo "Thanh toán $amount VNĐ qua PayPal<br>";
//     }
// }

// $payments = [new CreditCard(), new PayPal()];

// foreach ($payments as $method) {
//     $method->pay(500000);
// }

//CU PHAP TRAIT;
// trait Logger
// {
//     public function log($message)
//     {
//         echo "[LOG]: $message<br>";
//     }
// }

// class User
// {
//     use Logger;
// }

// $user = new User();
// $user->log("User đã đăng nhập"); // [LOG]: User đã đăng nhập
//-----------
//vd dung nhieu trait
// trait HasNAme
// {
//     public function getName()
//     {
//         return "Ten tu trait HasName<br>";
//     }
// }
// trait HasEmail
// {
//     public function getEmail()
//     {
//         return "Email tu trait HasEmail<br>";
//     }
// }

// class Customer
// {
//     use HasName, HasEmail;
// }
// $c = new Customer();
// echo $c->getName();
// echo $c->getEmail();
//----------------------------------------
//bai tap thuc hanh 
// trait Logger
// {
//     public function log($msg)
//     {
//         echo "[LOG: $msg<br>";
//     }
// }
// trait Timestamp
// {
//     public function getTime()
//     {
//         return date('Y-m-d H:i:s');
//     }
// }

// class Order
// {
//     use Logger, Timestamp;
//     public function process()
//     {
//         $this->log("Xu ly dong hang " . $this->getTime());
//     }
// }
// $oder = new Order();
// $oder->process();
//----------------------------------------
//static
// class MathHelper
// {
//     public static $pi = 3.14;
//     public static function square($x)
//     {
//         return $x * $x;
//     }
// }

// echo MathHelper::$pi;
// echo MathHelper::square(5);

//CONST
// class Config
// {
//     const VERSION = "1.0.0";
//     const APP_NAME = "MyApp";
// }
// echo Config::VERSION;
//Final
// class Base {
//     final public function hello() {
//         echo "Hello from base class<br>";
//     }
// }

// class Child extends Base {
// Error: Cannot override final method
// public function hello() {}
//---------------------------------------------------------
//Namespace 

// class AppConfig
// {
//     const VERSION = '2.5';
//     public static $author = 'John Doe';

//     public static function printInfo()
//     {
//         echo "Version: " . self::VERSION . "<br>";
//         echo "Author:" . self::$author . "<br>";
//     }
// }
// AppConfig::printInfo();

//Get $POST 
// <!DOCTYPE html>
// <html lang="vi">

// <head>
//     <meta charset="UTF-8">
//     <title>Form POST - Bài 2</title>
// </head>

// <body>

//     <h2>Đăng nhập</h2>

//     <form action="" method="POST">
//         <label for="email">Email:</label>
//         <input type="email" name="email" id="email" required>
//         <br><br>

//         <label for="password">Mật khẩu:</label>
//         <input type="password" name="password" id="password" required>
//         <br><br>

//         <button type="submit">Đăng nhập</button>
//     </form>

//     <hr>

//     <?php
//     // Xử lý dữ liệu POST
//     if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//         $email = trim($_POST['email'] ?? '');
//         $password = trim($_POST['password'] ?? '');

//         if (empty($email) || empty($password)) {
//             echo "<p style='color: red;'>Vui lòng nhập đầy đủ Email và Mật khẩu.</p>";
//         } else {
//             $email = htmlspecialchars($email); // chống XSS
//             echo "<h3>Email: $email đã đăng nhập thành công!</h3>";
//         }
//     }
//     
