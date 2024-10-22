<?php

//define('NAMA', 'ANTASAFARIQ');
//echo NAMA;

//echo "<br>";

//const UMUR = '23';
//echo UMUR;

//class Coba {
//    const NAMA = 'ARIQ';
//}

//echo Coba::NAMA;


//echo __LINE__;
//echo __FILE__;




//function coba() {
//    return __FUNCTION__;
//}

//echo coba();




class coba {
    public $kelas = __CLASS__;
}

$obj = new Coba;
echo $obj->$kelas;







?>