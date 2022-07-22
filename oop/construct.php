<?php

class Manusia{
    public $warna;
    public $jenisKelamin;

    public function __construct()
    {
        echo "Ini Method construct";
    }

    public function perkenalan(){
        echo "Nama Saya Dimas Ramdani";
    }

    public function __destruct()
    {
        echo "Ini Method Destruct";
    }
}

$cetak = new Manusia();

echo "<br>";
echo $cetak->perkenalan();
echo "<br>";


?>