<?php 
// 1. class abstract dengan keyword abstract
abstract class Produk {

// 2. bisa memiliki attribute
    public $harga = 1000;

// 3. abstract class dapat memiliki variable static
public static $judul = "Belajar Abstract Class";

 // 4. dapat memiliki function dengan bodi code tanpa 
public function getHarga(){
    return $this->harga;
}

// // 5. dapat melakukan signiture / tanda tangan
abstract public static function sayHello($name):void;

// 6. setiap yang dimiliki oleh abstract class, wajib digunakan
}


