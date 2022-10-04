<?php 

class newConstruct{

    public $nama;
    public $level;

    public function __construct($nama, $level)
    {
        $this->nama = $nama;
        $this->level = $level;
    }

}

$obj = new newConstruct("new Constructor", "Easy");

echo 'nama judul: '. $obj->name  . '<br>';
echo 'level: '. $obj->level ;

// Output: 
// nama judul: "ini class new Constructor"
// level: "Easy"