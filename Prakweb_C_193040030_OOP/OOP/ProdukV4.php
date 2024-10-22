
<?php

// Jual Produk
// Komik
// Game
class produk {
    public  $judul,
            $penulis,
            $penerbit,
            $harga;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getlabel() {
        return "$this->penulis, $this->penerbit";
    }

}

class CetakInfoProduk {
    public function cetak( Produk $produk ) {
        $str = "{produk->judu} | {$produk->getlabel()} (Rp. {$produk->harga})";
        return $str;
    }
}



$produk1 = new Produk("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000);
$produk2 = new Produk("Uncharted", "Neil Druckman", "Sony Computer", 250000);



echo "Komik : " . $produk1->getlabel();
echo "<br>";
echo "Game : " . $produk2->getlabel();
echo "<br>";

$infoProduk1 = new CetakInfoProduk();
echo $indoProduk1->cetak($produk1);

