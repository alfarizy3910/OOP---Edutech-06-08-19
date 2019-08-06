<?php
    class mobil {
        private $mobil1 = "mobil = Roda 4";
        private $mobil2 = "mobil = Roda 6";

        public function tampil_mobil() {
            return $this->mobil1;
        }

        public function tampil_mobil2(){
            return $this->mobil2;
        }
    }

    $namamobil = new mobil();
    echo $namamobil->tampil_mobil() ."<br>";
    echo $namamobil->tampil_mobil2();
?>