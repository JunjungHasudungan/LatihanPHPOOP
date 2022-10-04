<?php 
class Salam
{
    public function __construct()
    {
        echo 'Ini dari class ' . __CLASS__;
    }

    public static function getNameClass(){
        echo __CLASS__;
    }
} 