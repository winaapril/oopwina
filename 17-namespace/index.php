<?php

require_once 'App\init.php';


//$produk1 = new komik("Naruto", "Masashi kishimoto", "Shonen Jump", "30000, 100);
//produk2 = new Game("Uncharted", "Neil Druckmann", "Sony computer", " 250000, 50);

//$cetakProduk = new CetakInfoProduk();
//$cetakProduk->tambahProduk( $produk1 );
//$cetakProduk->tamabahProduk( $produk2 );
//echo $cetakProduk->cetak();

//echo "<hr>";

use App\Service\User as ServiceUser;
use App\Service\User as ProdukUser;

new ServiceUser();
echo "<br>";
new ProdukUser();