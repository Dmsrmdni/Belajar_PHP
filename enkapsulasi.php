<?php
// class induk
class Nilai{
    protected $nilai_kehadiran = 80;
    protected $nilai_tugas = 90;
    protected $nilai_absen = 80;
    protected $nilai_ujian = 85;
}
// class turunan
class Rapot_siswa extends Nilai{
    public $nis = "234";
    public $nama = "Dimas Ramdani";
    public $jurusan = "Rekayasa Perangkat Lunak";
    public $kelas = "XI RPL 3";

    // Tidak Bisa di Akses oleh class lain hanya bisa di akses oleh kelas itu sendiri(private)
    private function hitung_nilai(){
        $nilai_akhir = ($this->nilai_kehadiran + $this->nilai_tugas + $this->nilai_absen + $this->nilai_ujian)/4;
        return $nilai_akhir;
    }

    // Hak Yang Memerlukan Akses khusus hanya bisa di akses di dalam kelas itu sendiri maupun kelas turunannya(protected)
    protected function biodata(){
        echo "Nis : ".$this->nis."</br>";
        echo "Nama : ".$this->nama."</br>";
        echo "Jurusan :".$this->jurusan."</br>";
        echo "Kelas :".$this->kelas."</br>";
    }

    // Bisa di Akses di dalam ataupun di luar class(public)
    public function hasil_nilai(){
        $this->biodata();
        echo "Nilai Rata Ratanya ".$this->hitung_nilai();
    }
}
// instansiasi
$rapot = new Rapot_siswa();
echo $rapot->hasil_nilai();
echo $rapot->nis;

// jika memanggil hak akses private dan protected di luar kelas akan menghasilkan error
// echo $rapot->hitung_nilai();
// echo $rapot->biodata();
?>