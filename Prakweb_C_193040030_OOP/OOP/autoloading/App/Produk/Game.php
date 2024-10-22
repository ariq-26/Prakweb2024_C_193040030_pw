<?php

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