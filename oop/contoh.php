<?php

class Bangun{

    var $luas;
    var $sisi;

    function persegi($sisi){
        $luas = $sisi * $sisi;
        echo "Luas persegi adalah $luas";
    }

    function persegi_panjang($alas,$tinggi){
        $luas = ($alas * $tinggi)/2;
        echo "Luas persegi panjang adalah $luas";
    }

    function segitiga($alas,$tinggi){
        $luas = ($alas * $tinggi)/2;
        echo "Luas segitanya adalah $luas";
    }

    function lingkaran($jari){
        $luas = (22/7) * $jari * $jari;
        echo "Luas lingkarannya adalah $luas";
    }

}

$cetak = new Bangun();

echo $cetak ->segitiga(5,4) . "<br>";
echo $cetak ->persegi(5)  . "<br>";
echo $cetak ->persegi_panjang(10,5) . "<br>";
echo $cetak ->lingkaran(14) . "<br>";

?>
