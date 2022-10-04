<?php 
// membuat class User
class User{
    // memiliki 3 attribute / data member / proprties
    // nama, umur, kelas
    public $nama;
    public $umur;
    public $kelas;

} 
// inisilasisasi class objek
$user = new User();

// memberikan nilai setiap attributenya
$user->nama = "Arief";
$user->umur = 16;
$user->kelas = "XII RPL";

// tampilkan semua attribute yang dimiliki
echo "Nama: " . $user->nama . '<br>';
echo "Umur: " . $user->umur . '<br>';
echo "Kelas: " . $user->kelas . '<br>';

// output:
// Nama: Arief
// Umur: 16,
// Kelas: XII RPL