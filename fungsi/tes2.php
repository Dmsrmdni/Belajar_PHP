<?php

    function persegi($sisi){
        $luas = $sisi * $sisi;
        echo "<h3>Persegi</h3>";
        echo "sisi : ". $sisi. "<br>";
        echo "Luas Perseginya adalah : ".$luas;
    }

    function Persegi_panjang($panjang,$lebar){
        $luas = $panjang * $lebar;
        echo "<h3>Persegi panjang</h3>";
        echo "panjang : ". $panjang. "<br>";
        echo "lebar : ". $lebar. "<br>";
        echo "Luas Persegi panjangnya adalah : ".$luas;
    }

    function Segitiga( $alas,$tinggi){

        $luas = ($alas * $tinggi)/2;
        echo "<h3>Segitiga</h3>";
        echo "alas : ". $alas. "<br>";
        echo "tinggi : ". $tinggi. "<br>";
        echo "Luas Segitiganya adalah : ".$luas;
    }

    function Lingkaran($jari){
        $luas = (22/7) * $jari * $jari;
        echo "<h3>Lingkaran</h3>";
        echo "jari : ". $jari. "<br>";
        echo "Luas Lingkarannya adalah : ".$luas;
    }

    persegi(5);
    echo "<hr>";
    Persegi_panjang(10,20);
    echo "<hr>";
    Segitiga(10,21);
    echo "<hr>";
    Lingkaran(14);


?>