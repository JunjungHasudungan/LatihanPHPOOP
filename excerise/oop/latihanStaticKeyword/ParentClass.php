<?php

abstract class ParentClass {

    public static string $title = 'Ini Class' . __CLASS__;

    public static function getTitle(){
        return new static;
    }

    public static function getSelf(){
        return new self;
    }
}


class ChildClass extends ParentClass{

    public static string $title =  'Ini Class '.  __CLASS__;

    public static function getTitle(){
        return Coba::$title;
    }

    public static function getSelf(){
        return ChildClass::getTitle();
    }
    
}

class Coba {

    public static $title = 'Ini class ' . __CLASS__;
}

echo ChildClass::getTitle();
// output: 
echo '<hr>';
echo ChildClass::getSelf();
// output: