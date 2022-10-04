<?php 

interface Fuel 
{
/*     
    1. interface tidak bisa memiliki properthies 
    2. interface tidak bisa berisikan code body
    3. static hanya digunakan pada function
    4. type akses modifier hanya bisa public
    5. wajib di implementasikan ke dalam class yang digunakan 
*/
    public function fillIn($typeFuel):String;
    // public function getTypeFuel():String;
}