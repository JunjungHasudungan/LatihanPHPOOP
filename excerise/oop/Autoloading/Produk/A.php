<?php 
    namespace Produk;
    
class A {
    public function __construct()
    {
        echo 'ini dari class ' . __CLASS__;
    }

    public function functionA(){
        echo 'ini dari function ' . __FUNCTION__;
    }
}