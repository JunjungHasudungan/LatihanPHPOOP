<?php 


class Human {

    public $name;
    public $age;
    public $is_active;
    public $major;

}
$human = new Human();
$human->name = 'Arief';
$human->age = 16;
$human->is_active = true;
$human->major = 'Rekayas Perangkat Lunak';

echo "Nama      :" . $human->name . '<br>';
echo 'Umur      : ' . $human->age . '<br>';
echo 'Aktif     : ' . $human->is_active . '<br>';
echo 'Jurusan   : ' , $human->major . '<br>';
 