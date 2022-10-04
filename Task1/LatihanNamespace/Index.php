<?php 
require_once 'App/Init.php';
use App\Produk\User as ProdukUser;
use App\Service\User as ServiceUser;

new ProdukUser();
echo '<hr>';
new ServiceUser();