<?php 
interface CookingService{
    public function boiling($name);
}

class Cooking implements CookingService{
    public $name;

    public function __construct($name = 'rice')
    {
        $this->name = $name;
    }

    public function getName(){
        return $this->name;
    }

    public function boiling($name)
    {
        $this->name = $name;
    }

    public function display(){
        echo 'Nama Yang dimasak : ' . $this->getName(). '<br>';
    }
}

$cook = new Cooking();
echo $cook->display();