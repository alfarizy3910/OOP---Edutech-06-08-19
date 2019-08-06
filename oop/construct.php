<?php 

//OOP
//CLASS,METHOD,PROPERTY,OBJECT
class mobil {
    var $merek;

    //method

    function kerangka_mobil(){
        return "merah <br>";
    }

    function __construct(){
    echo "ini construct<br>";
    }

    function __destruct(){
        echo "ini destruct <br>";
    }

    function merek_mobil (){
        return "Suzuki <br>";
    }

}

//inisialisasi
$garasi = new mobil ();

//panggil method
echo $garasi->kerangka_mobil();
echo $garasi->merek_mobil();

?>