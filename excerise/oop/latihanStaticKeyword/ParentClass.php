<?php

abstract class ParentClass {

    public static string $title = 'Ini dari ' . __CLASS__;

    public static function getTitle(){
        return new static;
    }

    public static function getSelf(){
        return new self;
    }
}


class ChildClass extends ParentClass{

    public static string $title = 'Ini dari ' . __CLASS__;

    public static function getTitle(){
        return Coba::$title;
    }

    public static function getSelf(){
        return ChildClass::$title;
    }
}

class Coba extends ChildClass{

   public static string $title = 'Ini dari ' . __CLASS__;
}

// echo ParentClass::getTitle();
// echo '<hr>';
echo ChildClass::getTitle();
// output: 
echo '<hr>';
echo Coba::getSelf();
// output: