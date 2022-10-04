<?php 
class A{
    public function __construct()
    {
        echo 'Ini dari class' . static::class . '<br>'; 
    }
}