<?php

//require_once 'Produk/InfoProoduk.php';
//require_once 'Produk/Produk.php';
//require_once 'Produk/Komik.php';
//require_once 'Produk/Game.php';
//require_once 'Produk/CetakInfoProduk.php';


spl_autoload_register(function( $class ){
    require_once __DIR__ . 'produk/' . $class . '.php';
});