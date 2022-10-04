<?php 
// require_once 'App/Produk/User.php';
// require_once 'App/Service/User.php';

// spl_autoload_register(function($className){
//     require_once __DIR__ . '/Produk/'. $className . '.php';
// });

// melakukan spl lebih dari 1 package 
spl_autoload_register(function($className){

    $className = explode('\\', $className);
    $className = end($className);

    require_once __DIR__ . '/Produk/' . $className . '.php';

    require_once __DIR__ . '/Service/' . $className . '.php';
});
