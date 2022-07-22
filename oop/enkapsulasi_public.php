<?php
 
// buat class laptop
class manusia {
 
   // buat public property
   public $nama;
   public $warna;
 
   // buat public method
   public function tampilkan_nama() {
     return "Nama Saya Dimas Ramdani";
   }
}
  
// buat objek dari class laptop (instansiasi)
$cetak = new manusia();
  
echo $cetak->tampilkan_nama();

?>