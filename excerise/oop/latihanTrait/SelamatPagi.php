<?php 
// ini sebagai parentClass
trait SelamatPagi{
    public function apaKabar(){
        echo static::class . ' selamat pagi ';
    }
}