
<?php

// Jual Produk
// Komik
// Game
interface InfoProduk {
    public function getInfoProduk();
}

abstract class produk {
    protected $judul,
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

    abstract public function getInfo() {

    }


}


class Komik extends Produk implements InfoProduk {
    public $jmlHalaman;

    public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", 
    $harga = 0, $jmlHalaman = 0 ) {

        parent::__construct( $judul, $penulis, $penerbit, $harga );

        $this->jmlHalaman = $jmlHalaman;

    }

    $str = "{$this->judul} | {$this->getlabel()} (Rp. {$this->harga})";

    return $str;
}
    
    public function getInfo() {
        $str = "Komik : " . $this->getInfo() . " - {$this->jmlHalaman} Halaman.";
        
        return $str;
    }


class Game extends Produk implements InfoProduk {
    public $waktuMain;

    public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", 
    $harga = 0, $waktuMain = 0 ) {

        parent::__construct( $judul, $penulis, $penerbit, $harga );

        $this->waktuMain = $waktuMain;

    }

    $str = "{$this->judul} | {$this->getlabel()} (Rp. {$this->harga})";

    return $str;
}


    public function getInfoProduk() {
        $str = "Game : " . $this->getInfo() . " ~ {$this->waktuMain} Jam.";
        return $str;
    }


class CetakInfoProduk {
    public $daftarProduk = array();


    public function tambahProduk( Produk $produk) {
        $this->daftarProduk[] = $produk;
    }


    public function cetak() {
        $str = "DAFTAR PRODUK : <br>";

        foreach( $this->daftarProduk as $p ) {
            $str .="- {$p->getInfoProduk()} <br>";
        }

        return $str;
    }
}


$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);
$produk2 = new Game("Uncharted", "Neil Druckman", "Sony Computer", 250000, 50);

$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk( $produk1 );
$cetakProduk->tambahProduk( $produk2 );
echo $cetakProduk->cetak();





