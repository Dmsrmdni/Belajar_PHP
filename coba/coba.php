<?php 

class komputer{
    private $pemilik;
    private $merk;

    // constructor sebagai pembuat nilai awal
    public function __construct($pemilik,$merk){
        $this -> pemilik = $pemilik;
        $this -> merk = $merk;
    }
        
    public function hidupkan_komputer(){
        return "Hidupkan komputer $this->merk punya $this->pemilik";
    }

    public function __destruct()
    {
        return " Ini berasal dari __destruct komputer";
    }
}

$komputer_andi = new komputer("andi","lenovo");

echo $komputer_andi -> hidupkan_komputer();
echo "<br>";
$komputer_anto = new komputer("anto","acer");
echo $komputer_anto -> hidupkan_komputer();
echo "<br>";

// hapus objek $komputer_andi
unset($komputer_andi);
  
echo "<br />";
echo "Objek Telah Dihancurkan";

?>