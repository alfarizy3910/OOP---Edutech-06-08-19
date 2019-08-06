<?php

//OOP
//CLASS,METHOD,PROPERTY,OBJECT
class rumah {
    var $class;

    //method 
    function class_rumah(){
        return "ini rumah tanpa garasi";
    }

    function class_garasi(){
        return "<br>ini rumah dengan garasi";
    }

    function class_sultan(){
        return "<br>ini rumah sultan gaes";
    }
}

//inisialisasi
$rumah = new rumah ();

//panggil method
echo $rumah->class_rumah();

echo $rumah->class_garasi();

echo $rumah->class_sultan();





?>