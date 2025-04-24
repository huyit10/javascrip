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
class sieunhan
{
    public $ten;
    public $sucmanh;
    function ganGiaTri($a, $b)
    {
        $this->ten = $a;
        $this->sucmanh = $b;
    }
}
$iroman = new sieunhan();
$iroman->ganGiaTri("david", 50);

echo $iroman->ten;
echo $iroman->sucmanh;
// $iroman = new sieunhan();
// $iroman->ten = "David";
// $iroman->sucmanh = 50;



// echo $iroman->ten;
// echo $iroman->sucmanh;
