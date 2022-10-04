<?php
include 'Handphone.php';
include 'Accessories.php';

class Nokia extends Accessories implements Handphone{

    public $volume = 50;

    public function powerOn()
    {
        $this->isPower = true;

        echo 'Handphone menyala';
    }

    public function powerOff()
    {
        $this->isPower = false;

        echo 'Handphone mati';
    }

    public function currentVolume(){
        echo 'Volume Sekarang ' . $this->getVolume();
    }


    public function volumenUp()
    {
        if(!$this->isPower ){
            if ($this->volume == $this->volumeMax) {
                echo 'Volume Full!!';
                $this->currentVolume();
            } else {
                $this->volume += 10;
                $this->currentVolume();
            }
            
        }else{
            $this->powerOff();
        }
    }

    public function volumeDown()
    {
        if ($this->isPower == false) {
            // volume min
            if ($this->volume == $this->volumeMin) {
                $this->getVolume();
            } else {
                $this->volume -= 10;
                $this->getVolume();
            }
        } else {
            $this->powerOff();
        }
        
    }

    public function getVolume(){
        return $this->volume;
    }
}