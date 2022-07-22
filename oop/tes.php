
<?php

class lapot{

    public $indo;
    public $mtk;
    public $inggris;
    public $produktif;
    public $total;

    public function Biodata($nama,$kelas,$jurusan){
        echo "Nama : ". $nama  . "<br>";
        echo "Kelas : ". $kelas . "<br>";
        echo "Jurusan : ". $jurusan . "<br>";

    }

    public function Matematika($Kehadiran,$absen,$pts,$uas){
        echo "<h3>Nilai Matematika</h3>";
        echo "Nilai Kehadiran : ". $Kehadiran  . "<br>";
        echo "Nilai Absensi : ". $absen . "<br>";
        echo "Nilai PTS : ". $pts . "<br>";
        echo "Nilai UAS : ". $uas . "<br>";

        $this->mtk = ($Kehadiran + $absen + $pts + $uas)/4;
        echo "<b>Nilai Rapot : ". $this->mtk ."</b><br>";
    }

    public function Indonesia($Kehadiran,$absen,$pts,$uas){
        echo "<h3>Nilai Indonesia</h3>";
        echo "Nilai Kehadiran : ". $Kehadiran  . "<br>";
        echo "Nilai Absensi : ". $absen . "<br>";
        echo "Nilai PTS : ". $pts . "<br>";
        echo "Nilai UAS : ". $uas . "<br>";

        $this->indo = ($Kehadiran + $absen + $pts + $uas)/4;
        echo "<b>Nilai Rapot : ". $this->indo."</b><br>";
    }

    public function Inggris($Kehadiran,$absen,$pts,$uas){
        echo "<h3>Nilai Inggris</h3>";
        echo "Nilai Kehadiran : ". $Kehadiran  . "<br>";
        echo "Nilai Absensi : ". $absen . "<br>";
        echo "Nilai PTS : ". $pts . "<br>";
        echo "Nilai UAS : ". $uas . "<br>";

        $this->inggris = ($Kehadiran + $absen + $pts + $uas)/4;
        echo "<b>Nilai Rapot : ". $this->inggris."</b><br>";
    }

    public function Produktif($Kehadiran,$absen,$pts,$uas){
        echo "<h3>Nilai produktif</h3>";
        echo "Nilai Kehadiran : ". $Kehadiran  . "<br>";
        echo "Nilai Absensi : ". $absen . "<br>";
        echo "Nilai PTS : ". $pts . "<br>";
        echo "Nilai UAS : ". $uas . "<br>";

        $this->produktif = ($Kehadiran + $absen + $pts + $uas)/4;
        echo "<b>Nilai Rapot : ". $this->produktif . "</b><br>";
    }

    public function Total(){
        $this->total = ($this->mtk + $this->indo + $this->inggris + $this->produktif)/4;
        echo "<b>Rata - Rata : ". $this->total ."</b><br>";
    }

}

$cetak = new lapot();

echo $cetak ->Biodata("Dimas","XI RPL 3","RPL");
echo "<hr>";
echo $cetak ->Matematika(100,80,100,80);
echo "<hr>";
echo $cetak ->Indonesia(90,80,70,80);
echo "<hr>";
echo $cetak ->Inggris(100,80,90,90);
echo "<hr>";
echo $cetak ->Produktif(100,90,100,90);
echo "<hr>";
echo $cetak ->Total();

?>

