<?php 
class SuperClass 
{
    public $name;
    public $level;
    public static $number;
    public $is_status;
    // public $

    public function __construct($name, $level = 'easy', $is_status)
    {
        $this->name = $name;
        $this->level = $level;
        $this->is_status = $is_status;
        self::$number = 1;
    }

    public function getName(){
        return $this->name;
    }

    public function getLevel(){
        return $this->level;
    }

    public function getStatus(){
        return $this->is_status;
    }

    public function space(){
        echo '<hr>';
    }

    public function displayParentClass(){
        echo 'No.' . self::$number++ . '<br>';
        echo 'Nama: ' . $this->getName(). '<br>';
        echo 'Level: ' . $this->getLevel() . '<br>';
        echo 'Status: ' . $this->getStatus() . '<br>';
        if($this->is_status == false){
            $this->space();
        }else{
            // $this->space();
        }
    }
}

class SubClass extends SuperClass{
    public $type;

    public function __construct($name, $level = 'medium', $is_status, $type = 'Pewarisan')
    {
        parent::__construct($name, $level, $is_status);
        $this->type = $type;
    }

    public function getType(){
        return $this->type;
    }

    // public function get 

    public function displayChildClass(){
        echo $this->displayParentClass();
        echo 'Type: ' . $this->getType() . '<br>';
        echo $this->space();
    }
}

$objSuperClass1 = new SuperClass('Superclass', 'easy', false);
$objSubClass1 = new SubClass('SubClass', 'medium', true, 'Pewarisan');
$objSubClass2 = new SubClass('SubClass', 'medium', true, 'Pewarisan');
echo $objSuperClass1->displayParentClass();
echo $objSubClass1->displayChildClass();
echo $objSubClass2->displayChildClass();