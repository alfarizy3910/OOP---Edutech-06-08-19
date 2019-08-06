<?php

//OOP
//CLASS,METHOD,PROPERTY,OBJECT
Class datakaryawan {
    var $karyawan;

    //method

    function nama(){
        return "Nama Karyawan: Harry Maguire <br>";
    }

    function umur(){
        return "Umur: 26<br>";
    }

    function line(){
        return "Line: Backend Developer <br>";
    }

    function break(){
        return "------------------------------<br>";
    }

    function nama1 (){
        return "Nama Karyawan: Daniel James <br>";
    }

    function umur1 (){
        return "Umur: 21<br>";
    }

    function line1(){
        return "Line: Frontend Developer <br>";
    }

    function break1(){
        return "------------------------------<br>";
    }
    function nama2 (){
        return "Nama Karyawan: Aaron Wan Bissaka <br>";
    }

    function umur2 (){
        return "Umur: 23<br>";
    }

    function line2(){
        return "Line: Game Developer <br>";
    }

    function break2(){
        return "------------------------------<br>";
    }
}

//inisialisasi
$data = new datakaryawan();

//panggil method
echo $data->nama();
echo $data->umur();
echo $data->line();
echo $data->break();
echo $data->nama1();
echo $data->umur1();
echo $data->line1();
echo $data->break1();
echo $data->nama2();
echo $data->umur2();
echo $data->line2();
echo $data->break2();

?>