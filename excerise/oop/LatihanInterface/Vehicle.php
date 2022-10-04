<?php 
interface Fuel {
/*     
    1. interface tidak bisa memiliki properthies 
    2. interface tidak bisa berisikan code body
    3. static hanya digunakan pada function
    4. type akses modifier hanya bisa public
    5. wajib di implementasikan ke dalam class yang digunakan 
*/
    public function fillIn($typeFuel):String;
}

class Vehicle implements Fuel{
    public function __construct(
        public $typeFuel = "Premium"
        ){}
    public function setTypeFuel(String $typeFuel = "Solar"){
        $this->typeFuel = $typeFuel; 
        return $this;
    }
    public function getTypeFuel():String {
        return $this->typeFuel;
    }
    public function fillIn($typeFuel):String {
        return $this->typeFuel = $typeFuel;
    }
}

$kendaraan = new Vehicle();
echo $kendaraan->setTypeFuel(typeFuel: "avture")->getTypeFuel();
// outout: 


