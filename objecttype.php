<?php

class Produk {
    public $judul, 
           $penulis, 
           $penerbit, 
           $harga;
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;

    }

    public function getLabel() {
        return "$this->penerbit, $this->penulis";
    }
}

class CetakInfoProduk {
    public function cetak(Produk $produk) {
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str;
    }
}

$product3 = new Produk("Narutos", "kisamoto", "shonen", 30000);
echo $product3->getLabel();
$infoProduk1 = new CetakInfoProduk();
echo $infoProduk1->cetak($product3);

?>
