<?php

// Membuat class
class Kucing{
    // Property
    public $jenis;
    public $warna = "Oren";

    // Function / Method
     public function makan(){
        echo "kucing suka makan ikan";
    }

     public function minum(){
        echo "Kucing suka minum susu";
    }
}

// object
// instansiasi
$cetak = new Kucing();

// pemanggilan Method
$cetak -> makan();
echo "<br>";
$cetak -> minum();
echo "<hr>";

// Pemanggilan Property
echo $cetak -> jenis  = "Anggora";
echo "<br>";
echo $cetak -> warna;

?>


