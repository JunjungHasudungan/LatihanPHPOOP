<?php 

class DiskonRentalMotor
{
    public $hasil = 0;

    public function __construct(
        private $harga = 5000, private $hargaDiskon = 5
        )
    {}

    public function message(){
        echo  $str = "Waktu tidak tersedia";
    }

    public function potonganDiskon($jumlahJam){
        if($jumlahJam <= 9){
            return $this->hasil = ($jumlahJam * $this->harga);
        }
        elseif($jumlahJam <= 15 && $jumlahJam >= 10){
            return $this->hasil += ($jumlahJam * $this->harga) -
        ((($jumlahJam * $this->harga)  * $this->hargaDiskon / 100));
        }
        elseif ($jumlahJam >= 16 && $jumlahJam <= 24){
           return $this->hasil += ($jumlahJam * $this->harga) - 
((($jumlahJam * $this->harga) * ($this->hargaDiskon * 2)) / 100);
        }
        else{
            return $this->message();
        }
    }
}

$rental = new DiskonRentalMotor();
echo  $rental->potonganDiskon(jumlahJam:17);


/* 
No.9 Keyword untuk melakukan pewarisan / inheritance = extends
No.10 Short hand membuat comment lebih 1 baris = ctrl + shift + ?nx dm;vn iodfurdubreh7

*/
