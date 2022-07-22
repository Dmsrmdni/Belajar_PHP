<?php

class bunga{
    private $jenis_bunga = "Bunga Berduri";

    public function tampilkan_jenis(){
        return $this->jenis_bunga;
    }
}
class mawar extends bunga{
    public $warna = "merah";
    public function jenis(){
        return $this->tampilkan_jenis();
    }
}
$mawar = new mawar();

echo $mawar->tampilkan_jenis();
echo "<br>";
echo $mawar->warna;
?>