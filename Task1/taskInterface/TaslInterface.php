<?php 
interface DisplayService{
    public function display();

}

abstract class Motor implements DisplayService{
    public $name;
    public static $index;
    
    public function __construct(
        public $machine_number, 
        public $type, 
        public $typeCilinder,
        public $colour,
        // public $name = static::
        )
    {
        $this->name = static::class;
        self::$index = 1;
    }

    public function getNoMesin():int{
        return $this->machine_number;
    }
    
    public function getType(): String {
        return $this->type;
    }

    public function getName(): String {
        return $this->name;
    }

    public function getTpyeCilinder():int {
        return $this->typeCilinder;
    }

    public function space(){
        echo '<hr>';
    }
    public function display()
    {
        echo 'No.' . self::$index++ . '<br>';
        echo 'Nama: ' . $this->getName() . '<br>';
        echo 'No Mesin: ' . $this->getNoMesin() . '<br>';
        echo 'Type: ' . $this->getType() . '<br>';
        echo 'CC Cilinder: ' . $this->getTpyeCilinder() . '<br>';
        $this->space();
    }
}

class Vario extends Motor{

    // public function dis
}

class Sonic extends Motor{

}

$vario1 = new Vario(machine_number: 123, type: 'Sport', typeCilinder: 125, colour: 'White');
$vario2 = new Vario(4523, type: 'sport', typeCilinder: 150, colour: 'Black');
$sonic1 = new Sonic(machine_number: 54232, type: 'Sport', typeCilinder: 150, colour: 'red');
echo $vario1->display();
echo $vario2->display();
echo $sonic1->display();