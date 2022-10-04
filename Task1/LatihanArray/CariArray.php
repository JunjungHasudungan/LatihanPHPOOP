<?php 


// membuat array multidimensi terlebih dahulu

$murid = [ 
    '0' => [
		'nama' => 'Beno',
		'Alamat' => 'Jakarta',
		'Umur' => 25
    ],
	'1' => [
		'nama' => 'Dave',
		'Alamat' => 'Tangerang',
		'Umur' => 23
    ],
	'2' => [
		'nama' => 'Erwo',
		'Alamat' => 'Bekasi',
		'Umur' => 30
    ],
	'3' => [
		'nama' => 'Gello',
		'Alamat' => 'Bogor',
		'Umur' => 26
    ],
	'2' => 
    [
		'nama' => 'Charly',
		'Alamat' => 'Banten',
		'Umur' => 27
    ],
];

$cariUser = "Erwo";
$cari = array_search($cariUser, array_column($murid, 'nama'));

if($murid[$cari] == $cariUser){
	echo 'ada';
}else{
	echo $cariUser . 'Tidak ada';
}
// print_r($murid[$cari]);