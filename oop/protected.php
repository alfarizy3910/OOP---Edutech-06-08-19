<?php
    class mobil {
        protected $nama = "toyota";

        public function tampil_mobil() {
            return $this->nama;
        }
    }

    $namamobil = new mobil();
    echo $namamobil->tampil_mobil();

?>