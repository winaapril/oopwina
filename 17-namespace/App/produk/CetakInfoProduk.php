<?php

class CetakInfoProduk {
	public $daftarProduk = array();

	public function tambahProduk( Produk $produk ) {
		$this->daftarProduk[] = $Produk;
	}

	public function cetak() {
		$str = "DAFTAR PRODUK : <br>";

		foreach($this->daftarProduk as $p ) {
			$str .= "- {$p->getInfoProduk()} <br>";
		}

		return $str;
	}
}