<?php

class Produk {
    public $judul, 
           $penulis, 
           $penerbit, 
           $harga,
           $jmlhHalaman,
           $waktuMain,
           $tipe;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlhHalaman = 0, $waktuMain = 0, $tipe) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlhHalaman = $jmlhHalaman;
        $this->waktuMain = $waktuMain;
        $this->tipe = $tipe;

    }

    public function getLabel() {
        return "$this->penerbit, $this->penulis";
    }
    public function getInfoLengkap() {
        $str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})}";
        if ($this->tipe == "komik") {
            $str .= " - {$this->jmlhHalaman} Halaman.";
        } else if ($this->tipe == "game") {
            $str .= " - {$this->waktuMain} Jam.";
        }
        return $str;
    }
}

class Komik extends Produk {
    public  function getInfoProduk() {
        $str = "Komik: {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})} - {$this->jmlhHalaman}";
        return $str;
    }
}

class Game extends Produk {
    public function getInfoProduk() {
        $str = "Game: {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})} - {$this->waktuMain}";
        return $str;
    }
}

class CetakInfoProduk {
    public function cetak(Produk $produk) {
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str;
    }
}

$product3 = new Komik("Narutos", "kisamoto", "shonen", 30000, 500, 0, "komik");
$product4 = new Game("sasuke", "kudino", "shonen", 400000, 0, 50, "game" );

// echo $product3->getLabel();
$infoProduk1 = new CetakInfoProduk();
// echo $infoProduk1->cetak($product3);
echo $product3->getInfoLengkap();
echo "<br>";
echo $product4->getInfoLengkap();

?>
