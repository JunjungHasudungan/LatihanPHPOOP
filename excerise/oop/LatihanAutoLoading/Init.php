<?php 
// require_once 'Produk/A.php';
// require_once 'Produk/B.php';
// require_once 'Produk/C.php';
// require_once 'Produk/User.php';

spl_autoload_register(function( $nameClass ) {
    require_once 'Produk/' . $nameClass . '.php';
});