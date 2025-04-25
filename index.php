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
abstract class Person
{

    protected $ten;
    protected $namsinh;

    abstract public function showInfo();
}
class SinhVien extends Person {}

//Interface
