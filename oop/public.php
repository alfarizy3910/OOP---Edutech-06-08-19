<?php

//CLASS
class mobil {
    public $merek;
    public $warna;

//METHOD
    function tampil_merek(){
        return "ini merek toyota";
    }
}

//INISIALISASI
$mobil = new mobil ();

//PANGGIL METHOD
echo $mobil -> tampil_merek();