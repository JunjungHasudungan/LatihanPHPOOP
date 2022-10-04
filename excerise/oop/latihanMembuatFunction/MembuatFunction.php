<?php 

class MembuatFunction{
    public $title = "Ini latihan membuat function";
    // 4 jenis function yang sering digunakan 
    // 1. function tanpa parameter dan tanpa nilai return
    public function sayHello(){
        echo 'ini dari class '.  __CLASS__;
    }
    // 2. function dengan parameter dan tidak mengembalikan nilai
    public function perkalian($number = 4 ){
        echo 'angka yang dimasukkan adalah ' . $number;
    }
    // 3. function dengan parameter dan mengembalikan nilai
    public function penjumlahan($numb_a, $numb_b){
        return $numb_a * $numb_b;
    }
    // 4. function tanpa parameter dan mengembalikan nilai
    public function getTitle(){
        return $this->title;
    }
}
$obj = new MembuatFunction();
echo $obj->sayHello();
// output: Ini dari class Membuat Function
echo '<hr>';
echo $obj->perkalian();
// output: 4
echo '<hr>';
echo $obj->penjumlahan(1,2);
// output: 2
echo '<hr>';
echo $obj->getTitle();
// output: Ini latihan membuat function

