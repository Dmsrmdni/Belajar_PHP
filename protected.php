<?php

class Pakaian{
    protected $pemilik="Dimas Ramdani";

    public function akses_pemilik(){
        return $this->pemilik;
    }
    protected function merek_pakaian(){
        return "screamous";
    }
    public function pakai_pakaian(){
        return $this->merek_pakaian();
    }
}
$pakaian_baru = new pakaian;
echo $pakaian_baru->akses_pemilik();
echo "<br>";
echo $pakaian_baru->pakai_pakaian();

?>