<?php 
include 'Produk.php'; 

class Buku extends Produk {

    public static function sayHello($name):void
    {
        echo "hello, nama saya adalah {$name} ";
    }
    
}

echo Buku::sayHello("Asep");
// output: hello nama saya adalah asep