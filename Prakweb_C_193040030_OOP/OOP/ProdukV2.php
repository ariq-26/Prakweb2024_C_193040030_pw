
<?php

// Jual Produk
// Komik
// Game
class produk {
    public  $judul = "judul",
            $penulis = "penulis",
            $penerbit = "penerbit",
            $harga = 0;

    public function getlabel() {
        return "$this->penulis, $this->penerbit";
    }
}

//$produk = new Produk();
//$produk1->judul = "Naruto";
//var_dump($produk1);

//$produk = new Produk();
//$produk2->judul = "Uncharted";
//$produk2->tambahProperty = "hahaha";
//var_dump($produk2->judul);

$produk3 = new Produk();
$produk3->judul = "Naruto";
$produk3->penulis = "Masashi Kishimoto";
$produk3->penerbit = "Shonen Jump";
$produk3->harga = 30000;

//echo $produk3->getlabel();

//echo "<hr>";

$produk4 = new Produk();
$produk4->jdul = "Uncharted";
$produk4->penulis = "Neil Druckmann";
$produk4->penerbit = "Sony Computer";
$produk4->harga = 2500000;

echo "Komik : " . $produk3->getlabel();
echo "<br>";
echo "Game : " . $produk4->getlabel();

var_dump($produk3);