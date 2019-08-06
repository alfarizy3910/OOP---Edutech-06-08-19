<?php

class mobil{
    public $merek;

    function tampil_merek($toyota) {
        $this->merek = $toyota;
    }
}

class kerangka extends mobil {
    public $t_merek;

    function iniadalah ($kerangka){
        $this->t_merek = $kerangka;
    }
}

$panggil_mobil = new kerangka;

$panggil_mobil->tampil_merek("ini adalah mobil toyota");
$panggil_mobil->iniadalah("ini adalah mobil warna merah");

echo "mobil : " . $panggil_mobil->merek . "<br>";
echo "warna : " .$panggil_mobil->t_merek;

?>