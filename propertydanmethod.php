<?php

class Produk {
    public $judul = "judul",
           $penulis = "penulis",
           $penerbit = "penerbit",
           $harga = 0;
    public function getLabel() {
        return "$this->penerbit, $this->penulis";
    }
}

$product3 = new Produk();
$product3->judul = "Naruto";
$product3->penulis = "Masashi Kishimoto";
$product3->penerbit = "Shonen Jump";
$product3->harga = 30000;

var_dump($product3);
echo "Komik : $product3->penulis, $product3->penerbit";
echo "<br >";
echo $product3->getLabel();
?>
