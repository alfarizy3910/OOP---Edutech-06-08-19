<?php 

//OOP
//CLASS,METHOD,PROPERTY,OBJECT
class mobil {
    var $merek;

    //method
    function mobil_edu(){
        return "Ini mobil edu";

    }

    function merek_mobil (){
        return "Suzuki";
    }

}

//inisialisasi
$garasi = new mobil ();

//panggil method
echo $garasi->mobil_edu();

echo $garasi->merek_mobil();


?>