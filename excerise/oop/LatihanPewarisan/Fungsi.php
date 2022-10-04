<?php

class Fungsi
{
   // membuat construct
   public function __construct(public $name = "name", public $numb = 2)
   {
      
   }

/*    jenis jenis fungsi yang umum digunakan
   1. fungsi void tanpa parameter
   2. fungsi void dengan parameter
   3. fungsi tanpa parameter dengan mengembalikan nilai
   4. fungsi dengan parameter degan mengembalikan nilai */


   // 1. membuat fungsi void tanpa parameter
   public function title():void
   {
      echo "Belajar Fungsi";
   }

   // 2. fungsi void dengan parameter
   public function getParameter($testParameter){
      echo $testParameter;
   }

   // 3. Membuat fungsi dengan mengembalikan nilai
   public function getName(){
      return $this->name;
   }

   // 4. membuat fungsi dengan parameter dan mengembalikan nilai
   public function perkalian($numb_a = 0, $numb_b = 0){
      return ($numb_a * $numb_a);
   }
}

$obj = new Fungsi();

// menggunakan fungsi getName
echo $obj->getName();

// menggunakan fungsi perkalian
// echo $obj->perkalian();

