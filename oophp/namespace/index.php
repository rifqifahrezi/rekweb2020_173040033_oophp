<?php 

require_once 'App/init.php';

// $produk1 = new komik("Naruto", "Masashi Kishimoto", "Shonen jump", 30000, 100);
// $produk2 = new game("Uncharted", "Neil Druckman", "Sony Computer", 250000, 50);

// $cetakProduk = new cetakInfoProduk();
// $cetakProduk->tambahProduk( $produk1);
// $cetakProduk->tambahProduk( $produk2);
// echo $cetakProduk->cetak();

// echo "<hr>";

use App\Service\User as ServiceUser;
use App\Produk\User as ProdukUser;

new ServiceUser();
echo "<br>";

new ProdukUser();



 ?>