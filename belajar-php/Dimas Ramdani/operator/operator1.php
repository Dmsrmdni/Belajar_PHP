<?php 

$gaji =1000000;
$pajak=0.1;
$thp  =$gaji - ($gaji*$pajak);

echo"gaji sebelum pajak = Rp. $gaji <br>";
echo"gaji setelah pajak = Rp. $thp <br>";

$a = 10;
$b = 5;
$tambah = $a + $b;
echo"penjumlahan = $tambah <br>";

$kurang = $a - $b;
echo"pengurangan = $kurang <br>";

$kali = $a * $b;
echo"perkalian = $kali <br>";

$bagi = $a / $b;
echo"pembagian = $bagi <br>";

$modulus=$a % $b;
echo"modulus = $modulus <br>";

?>