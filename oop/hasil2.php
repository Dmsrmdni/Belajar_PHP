<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Hasil</title>
    <style>
            body{
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            background-image: url(https://mcdn.wallpapersafari.com/medium/33/20/UsYATi.jpg);
            background-size: cover;
            color: white;
            }

            h2{
            font-family: Segoe UI, Tahoma, Geneva, Verdana,serif;
            }

            #yo{
                color: red;
            }

            .card{
            background-image: url(https://i.pinimg.com/564x/51/6f/81/516f81992265537361713a58fddcdf47.jpg);
            background-size: cover;
            padding: 10px;
            box-shadow: inset 0px 5px 30px 10px black, 0px 0px 10px 2px gray;
            }
      </style>
  </head>
    <body>
        <center>
            <br><br><br>


<?php

    if(isset($_POST["submit"])){
        $nis = $_POST["nis"];
        $nama = $_POST["nama"];
        $jurusan = $_POST["jurusan"];
        $kelas = $_POST["kelas"];

        $nilai_kehadiran_indo = $_POST["nilai_kehadiran_indo"];
        $nilai_tugas_indo = $_POST["nilai_tugas_indo"];
        $nilai_absen_indo = $_POST["nilai_absen_indo"];
        $nilai_ujian_indo = $_POST["nilai_ujian_indo"];

        $nilai_kehadiran_inggris = $_POST["nilai_kehadiran_inggris"];
        $nilai_tugas_inggris = $_POST["nilai_tugas_inggris"];
        $nilai_absen_inggris = $_POST["nilai_absen_inggris"];
        $nilai_ujian_inggris = $_POST["nilai_ujian_inggris"];

        $nilai_kehadiran_mtk = $_POST["nilai_kehadiran_mtk"];
        $nilai_tugas_mtk = $_POST["nilai_tugas_mtk"];
        $nilai_absen_mtk = $_POST["nilai_absen_mtk"];
        $nilai_ujian_mtk = $_POST["nilai_ujian_mtk"];
        
        $nilai_kehadiran_produktif = $_POST["nilai_kehadiran_produktif"];
        $nilai_tugas_produktif = $_POST["nilai_tugas_produktif"];
        $nilai_absen_produktif = $_POST["nilai_absen_produktif"];
        $nilai_ujian_produktif = $_POST["nilai_ujian_produktif"];


    class Nilai_ujian{
        protected $nis;
        protected $nama;
        protected $jurusan;
        protected $kelas;

        protected $nilai_kehadiran_indo;
        protected $nilai_tugas_indo ;
        protected $nilai_absen_indo;
        protected $nilai_ujian_indo;

        protected $nilai_kehadiran_inggris;
        protected $nilai_tugas_inggris;
        protected $nilai_absen_inggris;
        protected $nilai_ujian_inggris;

        protected $nilai_kehadiran_mtk;
        protected $nilai_tugas_mtk;
        protected $nilai_absen_mtk;
        protected $nilai_ujian_mtk;

        protected $nilai_kehadiran_produktif;
        protected $nilai_tugas_produktif;
        protected $nilai_absen_produktif;
        protected $nilai_ujian_produktif;

        protected $nilai_akhir_indo;
        protected $nilai_akhir_inggris;
        protected $nilai_akhir_mtk;
        protected $nilai_akhir_produktif;
    }

    class Rapot extends Nilai_ujian{

        public function __construct(
            $nis,$nama,$jurusan,$kelas,
            $nilai_kehadiran_indo,$nilai_tugas_indo,$nilai_absen_indo,$nilai_ujian_indo,
            $nilai_kehadiran_inggris,$nilai_tugas_inggris,$nilai_absen_inggris,$nilai_ujian_inggris,
            $nilai_kehadiran_mtk,$nilai_tugas_mtk,$nilai_absen_mtk,$nilai_ujian_mtk,
            $nilai_kehadiran_produktif,$nilai_tugas_produktif,$nilai_absen_produktif,$nilai_ujian_produktif
        ) {
            $this->nis = $nis;
            $this->nama = $nama;
            $this->jurusan = $jurusan;
            $this->kelas = $kelas;

            $this->nilai_kehadiran_indo = $nilai_kehadiran_indo;
            $this->nilai_tugas_indo = $nilai_tugas_indo;
            $this->nilai_absen_indo = $nilai_absen_indo;
            $this->nilai_ujian_indo = $nilai_ujian_indo;

            $this->nilai_kehadiran_inggris = $nilai_kehadiran_inggris;
            $this->nilai_tugas_inggris = $nilai_tugas_inggris;
            $this->nilai_absen_inggris = $nilai_absen_inggris;
            $this->nilai_ujian_inggris = $nilai_ujian_inggris;

            $this->nilai_kehadiran_mtk = $nilai_kehadiran_mtk;
            $this->nilai_tugas_mtk = $nilai_tugas_mtk;
            $this->nilai_absen_mtk = $nilai_absen_mtk;
            $this->nilai_ujian_mtk = $nilai_ujian_mtk;

            $this->nilai_kehadiran_produktif = $nilai_kehadiran_produktif;
            $this->nilai_tugas_produktif = $nilai_tugas_produktif;
            $this->nilai_absen_produktif = $nilai_absen_produktif;
            $this->nilai_ujian_produktif = $nilai_ujian_produktif;

            $this->Indonesia();
            $this->Inggris();
            $this->Matematika();
            $this->Produktif();
        }

        protected function Indonesia(){
            $this->nilai_akhir_indo = ($this->nilai_kehadiran_indo + $this->nilai_tugas_indo + $this->nilai_absen_indo + $this->nilai_ujian_indo)/4;
        }

        protected function Inggris(){
            $this->nilai_akhir_inggris = ($this->nilai_kehadiran_inggris + $this->nilai_tugas_inggris + $this->nilai_absen_inggris + $this->nilai_ujian_inggris)/4;
        }

        protected function Matematika(){
            $this->nilai_akhir_mtk = ($this->nilai_kehadiran_mtk + $this->nilai_tugas_mtk + $this->nilai_absen_mtk + $this->nilai_ujian_mtk)/4;
        }

        protected function Produktif(){
            $this->nilai_akhir_produktif = ($this->nilai_kehadiran_produktif + $this->nilai_tugas_produktif + $this->nilai_absen_produktif + $this->nilai_ujian_produktif)/4;
        }

        public function __destruct() {
                echo "
                    <h1 align='center'>Nilai Ujian Sekolah</h1>
                    <br>
                    <div class='card w-75 mx-auto rounded'>
                        <div class='card-header border-white border-bottom w-75 mx-auto'>
                            <h2>Form Nilai</h2>
                        </div>
                        <br><br>
                        <div class='card-body'>
                            <div class='w-50 mx-auto'>
                                <div class='container'>
                                    <div class='mb-4'>
                                        <h2>Data Siswa</h2>
                                        <span class='d-block w-100 bg-secondary rounded  mx-auto' style='height: 2px'></span> 
                                    </div>
                                </div>
                                <table class='table border-primary table-dark table-sm'>
                                    <tr>
                                        <td>NIS</td>
                                        <td>:</td>
                                        <td>$this->nis</td>
                                    </tr>
                                    <tr>
                                        <td>Nama</td>
                                        <td>:</td>
                                        <td>$this->nama</td>
                                    </tr>
                                    <tr>
                                        <td>Jurusan</td>
                                        <td>:</td>
                                        <td>$this->jurusan</td>
                                    </tr>
                                    <tr>
                                        <td>Kelas</td>
                                        <td>:</td>
                                        <td>$this->kelas</td>
                                    </tr>
                                </table>
                            </div>
                            <br>

                            <div class='w-75 mx-auto'>
                                <div class='container'>
                                    <div class='mb-4'>
                                        <h2>Data Nilai</h2>
                                        <span class='d-block w-100 bg-secondary rounded  mx-auto' style='height: 2px'></span> 
                                    </div>
                                </div>

                                <table class='table table-bordered border-primary table-dark table-sm'>
                                    <tr>
                                        <th></th>
                                        <th>Bahasa Indonesia</th>
                                        <th>Bahasa Inggris</th>
                                        
                                        <th>Matematika</th>
                                        <th>Produktif</th>
                                    </tr>
                                    <tr>
                                        <td>Nilai Kehadiran</td>
                                        <td>$this->nilai_kehadiran_indo</td>
                                        <td>$this->nilai_kehadiran_inggris</td>
                                        <td>$this->nilai_kehadiran_mtk</td>
                                        <td>$this->nilai_kehadiran_produktif</td>
                                    </tr>
                                    <tr>
                                        <td>Nilai Tugas</td>
                                        <td>$this->nilai_tugas_indo</td>
                                        <td>$this->nilai_tugas_inggris</td>
                                        <td>$this->nilai_tugas_mtk</td>
                                        <td>$this->nilai_tugas_produktif</td>
                                    </tr>
                                    <tr>
                                        <td>Nilai Absen</td>
                                        <td>$this->nilai_absen_indo</td>
                                        <td>$this->nilai_absen_inggris</td>
                                        <td>$this->nilai_absen_mtk</td>
                                        <td>$this->nilai_absen_produktif</td>
                                    </tr>
                                    <tr>
                                        <td>Nilai Ujian</td>
                                        <td>$this->nilai_ujian_indo</td>
                                        <td>$this->nilai_ujian_inggris</td>
                                        <td>$this->nilai_ujian_mtk</td>
                                        <td>$this->nilai_ujian_produktif</td>
                                    </tr>
                                    <tr id='yo'>
                                        <th>Nilai Akhir</th>
                                        <th>$this->nilai_akhir_indo</th>
                                        <th>$this->nilai_akhir_inggris</th>
                                        <th>$this->nilai_akhir_mtk</th>
                                        <th>$this->nilai_akhir_produktif</th>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class='card-footer text-muted '>
                        <div align='center'>&#10148 XI RPL 3 &#10148 </div>
                        <div>Copyright &copy; 2021 by Dmsrmdni_</div>
                    </div>
                ";
        }
    }

    $cetak = new Rapot(
        $nis,$nama,$jurusan,$kelas,
        $nilai_kehadiran_indo,$nilai_tugas_indo,$nilai_absen_indo,$nilai_ujian_indo,
        $nilai_kehadiran_inggris,$nilai_tugas_inggris,$nilai_absen_inggris,$nilai_ujian_inggris,
        $nilai_kehadiran_mtk,$nilai_tugas_mtk,$nilai_absen_mtk,$nilai_ujian_mtk,
        $nilai_kehadiran_produktif,$nilai_tugas_produktif,$nilai_absen_produktif,$nilai_ujian_produktif
    );

}
?>

<br><br><br>
      
      </center>
      
  
      <a class="mt-5 btn btn-outline-danger text-light" style="margin-top: -900px; position:absolute;top:0" href="latihan2.php">Kembali</a>
        
  
      <!-- Optional JavaScript; choose one of the two! -->
  
      <!-- Option 1: Bootstrap Bundle with Popper -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  
      <!-- Option 2: Separate Popper and Bootstrap JS -->
      <!--
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
      -->
      </body>
  </html>
