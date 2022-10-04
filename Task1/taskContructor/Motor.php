<?php 
class Motor {
    public $name;
    public $id_machine;
    public $type;

    public function __construct($name, $id_machine, $type = 'automatic')
    {   
        $this->name = $name;
        $this->id_machine = $id_machine;
        $this->type = $type;
    }
}

$motor1 = new Motor('vario', 1245);
$motor2 = new Motor('CB 250', 3421, type: 'sport');

echo 'Nama : ' . $motor1->name . '<br>';
echo 'ID Mesin : ' . $motor1->id_machine . '<br>';
echo 'Type Motor: ' . $motor1->type . '<br>';
echo '<hr>';
echo 'Nama : ' . $motor2->name . '<br>';
echo 'ID Mesin : ' . $motor2->id_machine . '<br>';
echo 'Type Motor: ' . $motor2->type . '<br>';
