<?php 

class newConstruct{

    public function __construct(
        public String $name = '', 
        public $level = '',
        public $age = null
        ){}
}

$obj = new newConstruct('New Constructor', 'Easy');

echo 'nama judul: '. $obj->name  . '<br>';
echo 'level: '. $obj->level . '<br>';
echo 'Umur: ' . $obj->age;

// Output: 
// nama judul: "ini class new Constructor"
// level: "Easy"