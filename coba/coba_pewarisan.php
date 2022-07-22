<?php


    // class induk
    class computer{

        public $merk;
        public $processor;
        public $memory;

        public function beli_komputer(){
            return"Beli komputer Baru";
        }
    }

    // turunan class

    class Laptop extends computer{
        public function lihat_spec(){
            return"
            merk: $this->merk,
            Processor : $this->processor,
            Memory : $this->memory
            ";
        }
    }

    // inisialisasi
    $cetak = new Laptop();

    // isi property
    $cetak->merk = "acer";
    $cetak->processor = "Intel core i5";
    $cetak->memory = "2 GB";

    // memanggil method
    echo $cetak->beli_komputer();
    echo"<br>";
    echo $cetak->lihat_spec();


?>