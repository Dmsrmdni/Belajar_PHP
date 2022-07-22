<?php 
    
    // function perkenalan(){
    //      echo "Assalamualaikum <br>";
    //      echo "Perkenalkan nama saya : Dimas Ramdani";
    // }

    // perkenalan();

    // echo "<hr>";
    
    // perkenalan();


    function penjumlahan(){
        $angka1 = 20;
        $angka2 = 10;

        $jumlah = $angka1 + $angka2;

        echo "<h3>penjumlahan</h3>";
        echo "Angka Pertama : ". $angka1. "<br>";
        echo "Angka kedua : ". $angka2. "<br>";
        echo "Hasil Penjumlahan: ". $jumlah. "<br>";

    }

    function Pengurangan(){
        $angka1 = 30;
        $angka2 = 20;

        $jumlah = $angka1 - $angka2;

        echo "<h3>Pengurangan</h3>";
        echo "Angka Pertama : ". $angka1. "<br>";
        echo "Angka kedua : ". $angka2. "<br>";
        echo "Hasil Pengurangan: ". $jumlah. "<br>";

    }

    function Perkalian(){
        $angka1 = 10;
        $angka2 = 5;

        $jumlah = $angka1 * $angka2;

        echo "<h3>Perkalian</h3>";
        echo "Angka Pertama : ". $angka1. "<br>";
        echo "Angka kedua : ". $angka2. "<br>";
        echo "Hasil Perkalian: ". $jumlah. "<br>";

    }

    function Pembagian(){
        $angka1 = 20;
        $angka2 = 4;

        $jumlah = $angka1 / $angka2;

        echo "<h3>Pembagian</h3>";
        echo "Angka Pertama : ". $angka1. "<br>";
        echo "Angka kedua : ". $angka2. "<br>";
        echo "Hasil Pembagian: ". $jumlah. "<br>";

    }


    penjumlahan();
    echo"<hr>";
    Pengurangan();
    echo"<hr>";
    Perkalian();
    echo"<hr>";
    Pembagian();
    echo"<hr>";

?>