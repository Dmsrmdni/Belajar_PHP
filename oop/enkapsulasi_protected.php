<?php
 
class manusia {
 
   protected $nama="Dimas ramdani";
 
   public function nama(){
    return "Nama Saya " . $this->nama;
   }
   
   public function tampilkan_nama() {
     return $this->nama;
   }
}
  
$cetak = new manusia();
  
echo $cetak->tampilkan_nama();

?>