<?php 
trait ApaKabar{
    public function apaKabar(){
        echo  static::class . ' Apa Kabar ';
    }
}
trait SelamatPagi{
    public function apaKabar(){
        echo static::class . ' selamat pagi ';
    }
}
class Pesan {
    use ApaKabar, SelamatPagi{
        ApaKabar::apaKabar insteadof SelamatPagi;
        SelamatPagi::apaKabar as apaKabarDariTraitSelamatPagi;
    }
}
// inisialisasi class objek
$pesan = new Pesan();
echo $pesan->apaKabarDariTraitSelamatPagi();
// outout: tulis apa yang ditampilkan 