<?php

// Membuat class
class BangunDatar{

    public $luaspersegi;

    public function Persegi($sisi){
        echo "<h3>Menghitung Luas Persegi</h3>";
        echo "Sisi : ".$sisi."<br>";

        $luaspersegi = $sisi * $sisi;
        echo "Luas Persegi : ".$luaspersegi;
    }

    public function Persegi_panjang($panjang,$lebar){
        echo "<h3>Persegi panjang</h3>";
        echo "panjang : ". $panjang. "<br>";
        echo "lebar : ". $lebar. "<br>";

        $luas = $panjang * $lebar;
        echo "Luas Persegi panjangnya : ".$luas;
    }

    public function Segitiga( $alas,$tinggi){

        echo "<h3>Segitiga</h3>";
        echo "alas : ". $alas. "<br>";
        echo "tinggi : ". $tinggi. "<br>";

        $luas = ($alas * $tinggi)/2;
        echo "Luas Segitiganya : ".$luas;
    }

    public function Lingkaran($jari){
        echo "<h3>Lingkaran</h3>";
        echo "jari : ". $jari. "<br>";

        $luas = (22/7) * $jari * $jari;
        echo "Luas Lingkarannya : ".$luas;
    }


}

$cetak = new BangunDatar();

echo $cetak->Persegi(6);
echo "<hr>";
echo $cetak->Persegi_panjang(10,5);
echo "<hr>";
echo $cetak->Segitiga(30,15);
echo "<hr>";
echo $cetak->Lingkaran(14);
echo "<hr>";

?>
