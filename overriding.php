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
        return "$this->penulis, $this->penerbit";
    }
    
    public function getInfoProduk() {
        $str = "{$this->judul} | {$this->getLabel()} (Rp. $this->harga)";
        return $str;
    }
}

class Komik extends Produk {
    public $jmlhHalaman;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlhHalaman = 0) {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->jmlhHalaman = $jmlhHalaman;
    }

    public  function getInfoProduk() {
        $str = "Komik: " . parent::getInfoProduk() . " - {$this->jmlhHalaman} Halaman.";
        return $str;
    }
}

class Game extends Produk {
    public $waktuMain;
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktuMain = 0) {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->waktuMain = $waktuMain;
    }

    public function getInfoProduk() {
        $str = "Game: " . parent::getInfoProduk() . " - {$this->waktuMain} Jam.";
        return $str;
    }
}

class CetakInfoProduk {
    public function cetak(Produk $produk) {
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str;
    }
}

$product3 = new Komik("Narutos", "kisamoto", "shonen", 30000, 500, 0);
$product4 = new Game("sasuke", "kudino", "shonen", 400000, 0, 50);

echo $product3->getInfoProduk();
echo "<br>";
echo $product4->getInfoProduk();

?>
