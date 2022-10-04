<?php 
include 'Nokia.php';
include 'PhoneUser.php';

$nokia = new Nokia();
$phoneArief = new PhoneUser($nokia);
echo $phoneArief->turnOnPhone();