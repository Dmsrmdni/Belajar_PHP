<?php

class manusia{
    public $nama;

    public function tampilkan_nama(){
        return $this->nama;
    }
}
$manusia = new manusia();
$manusia->nama ="Dimas Ramdani";
echo $manusia->nama;
echo "<br>";
echo $manusia->tampilkan_nama();

?>