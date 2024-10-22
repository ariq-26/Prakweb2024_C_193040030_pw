
<?php

// Jual Produk
// Komik
// Game
class produk {
    private $judul,
            $penulis,
            $penerbit,
            $harga,
            $diskon = 0;

    public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", 
    $harga = 0 ) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function setJudul( $judul ) {
        if( !is_string($judul) ) {
            throw new Exception("Judul harus string");
        }
        $this->judul = $judul;
    }

    public function getJudul() {
        return $this->judul;
    }

    public function setPenulis( $penulis ) {
        $this->penulis = $penulis;
    }

    public function getPeulis( $penulis ) {
        return $this->penulis;
    }

    public function setPenerbit( $penerbit ) {
        $this->penerbit = $penerbit;
    }

    public function getPenerbit( $penerbit ) {
        return $this->penerbit;
    }

    public function setDiskon( $diskon ) {
        $this->diskon = $diskon;
    }

    public function getDiskon( $diskon ) {
        return $this->diskon;  
    }

    public function setHarga( $harga ) {
        return $this->harga;
    }

    public function getHarga() {
        return $this->harga - ( $this->harga * $this->diskon / 100 );
    }

    public function getlabel() {
        return "$this->penulis, $this->penerbit";
    }

    public function getInfoProduk() {
        $str = "{$this->judul} | {$this->getlabel()} (Rp. {$this->harga})";

        return $str;
    }

}


class Komik extends Produk {
    public $jmlHalaman;

    public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", 
    $harga = 0, $jmlHalaman = 0 ) {

        parent::__construct( $judul, $penulis, $penerbit, $harga );

        $this->jmlHalaman = $jmlHalaman;

    }

    public function getInfoProduk() {
        $str = "Komik : " . parent::getInfoProduk() . " - {$this->jmlHalaman} Halaman.";
        return $str;
    }
}


class Game extends Produk {
    public $waktuMain;

    public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", 
    $harga = 0, $waktuMain = 0 ) {

        parent::__construct( $judul, $penulis, $penerbit, $harga );

        $this->waktuMain = $waktuMain;

    }

    public function getInfoProduk() {
        $str = "Game : " . parent::getInfoProduk() . " ~ {$this->waktuMain} Jam.";
        return $str;
    }
}

class CetakInfoProduk {
    public function cetak( Produk $produk ) {
        $str = "{produk->judu} | {$produk->getlabel()} (Rp. {$produk->harga})";
        return $str;
    }
}



$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);
$produk2 = new Game("Uncharted", "Neil Druckman", "Sony Computer", 250000, 50);

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
echo "<hr>";

$produk2->setDiskon(50);  
echo $produk2->getharga();
echo "<hr>";

//echo $produk1->getJudul
//$produk1->setPenulis("Sandika Galih");
//$produk3 = new Produk("BarangBaru");
//echp $produk1->judul;



?>