<?php

    //Ini Kelas INDUK
    class Kendaraan {
        protected $jenis = "Matic";
        protected $warna = "Hitam";
        protected $merk = "Lambo";
    } 

    // Class ANAK
    class Motor extends Kendaraan{

        public function Jenis(){
            echo "Ini Motor : ".$this->jenis;
        }

        public function Warna(){
            echo "Berwarna : ".$this->warna;
        }
    }

   class Mobil extends Kendaraan{
       public function Merk(){
            echo "Ini Mobil : ".$this->merk;
       }
   }

    $motor = new Motor();
    $mobil = new Mobil();

    echo $motor->Jenis();
    echo "<br>";
    echo $motor->Warna();
    echo "<br>";
    echo $mobil->Merk();


?>