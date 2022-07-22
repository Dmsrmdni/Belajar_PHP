<?php
 
// buat class laptop
class manusia {
 
   // buat public property
   private $nama="Dimas ramdani";
 
   // buat public method
   public function tampilkan_nama() {
     return "Nama Saya " . $this->nama;
   }
}
  
// buat objek dari class laptop (instansiasi)
$cetak = new manusia();
  
echo $cetak->tampilkan_nama();

?>