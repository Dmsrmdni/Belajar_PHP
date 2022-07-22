<?php

    function persegi(){
        $sisi = 20;

        $luas = $sisi * $sisi;
        echo "<h3>Persegi</h3>";
        echo "sisi : ". $sisi. "<br>";
        echo "Luas Perseginya adalah : ".$luas;
    }

    function Persegi_panjang(){
        $panjang = 20;
        $lebar = 5;

        $luas = $panjang * $lebar;
        echo "<h3>Persegi panjang</h3>";
        echo "panjang : ". $panjang. "<br>";
        echo "lebar : ". $lebar. "<br>";
        echo "Luas Persegi panjangnya adalah : ".$luas;
    }

    function Segitiga(){
        $alas = 20;
        $tinggi = 5;

        $luas = ($alas * $tinggi)/2;
        echo "<h3>Segitiga</h3>";
        echo "alas : ". $alas. "<br>";
        echo "tinggi : ". $tinggi. "<br>";
        echo "Luas Segitiganya adalah : ".$luas;
    }

    function Lingkaran(){
        $jari = 14;

        $luas = (22/7) * $jari * $jari;
        echo "<h3>Lingkaran</h3>";
        echo "jari : ". $jari. "<br>";
        echo "Luas Lingkarannya adalah : ".$luas;
    }

    persegi();
    echo "<hr>";
    Persegi_panjang();
    echo "<hr>";
    Segitiga();
    echo "<hr>";
    Lingkaran();


?>