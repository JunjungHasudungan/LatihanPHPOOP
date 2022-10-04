<?php 
class PhoneUser{

    private $handphone;

    public function __construct(Handphone $handphone)
    {
        $this->handphone = $handphone;
    }

    public function turnOnPhone(){
        $this->handphone->powerOn();
    }

    public function turnOffPhone(){
        $this->handphone->powerOff();
    }

    public function makeSilentVolume(){
        $this->handphone->volumeDown();
    }

    public function makeLoudVolume(){
        $this->handphone->volumeDown();
    }

}