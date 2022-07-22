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

            h5{
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            color: red;
            }

      </style>
  </head>
    <body>
        <center>
            <br><br><br>
                <div class='container'>
                    <div class='mb-4'>
                        <h1>Data Karyawan</h1>
                        <span class='d-block w-50 bg-secondary rounded  mx-auto' style='height: 2px'></span> 
                    </div>
                </div>
      <?php
      

            if(isset($_POST["submit"])){
                $nama = $_POST["nama"];
                $jabatan = $_POST["jabatan"];
                $pendidikan = $_POST["pendidikan"];
                $pinjaman = $_POST["pinjaman"];
                $tabungan = $_POST["tabungan"];
          
    
                class gaji{
                    protected $nama;
                    protected $jabatan;
                    protected $pendidikan;
                    protected $pinjaman;
                    protected $tabungan;
                    protected $gaji;
                    protected $tunjangan;
                    protected $potongan;
                    protected $total;

                    public function __construct($nama,$jabatan,$pendidikan,$pinjaman,$tabungan) {
                        $this->nama = $nama;
                        $this->jabatan = $jabatan;
                        $this->pendidikan = $pendidikan;
                        $this->pinjaman = $pinjaman;
                        $this->tabungan = $tabungan;
                        $this->jabatan();
                        $this->Pendidikan();
                        $this->potongan();
                        $this->hasil();

                    }
      
                    protected function jabatan() {
                        if ($this->jabatan == "Direktur"){
                            $this->gaji = 10000000;
                        } else if ($this->jabatan == "Manager"){
                            $this->gaji = 7500000;
                        } else if ($this->jabatan == "Karyawan"){
                            $this->gaji = 5000000;
                        } else if ($this->jabatan == "Ob"){
                            $this->gaji = 2500000;
                        }
                    }
                    
      
                    protected function Pendidikan() {
                        if ($this->pendidikan == "S1"){
                            $this->tunjangan = 1000000;
                        } else if ($this->pendidikan == "SMK"){
                            $this->tunjangan = 750000;
                        } else if ($this->pendidikan == "SMP"){
                            $this->tunjangan = 500000;
                        } else if ($this->pendidikan == "SD"){
                            $this->tunjangan = 250000;
                        }
                    }
      
                    protected function Potongan() {
                        $this->potongan = ($this->pinjaman + $this->tabungan);
                    }

                    protected function hasil() {
                        $this->total = ($this->gaji + $this->tunjangan ) - $this->potongan;
                    }
      
                    public function __destruct()
                    {
                    echo "
                        <div class='container'>
                            <table class='table table-dark table-striped'>
                                    <tr>
                                        <td><h5>Gaji Pokok<h5></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class='d-block w-75 bg-secondary rounded  float-start' style='height: 2px'></span>    
                                        </td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Nama Karyawan</td>
                                        <td>:</td>
                                        <td>$this->nama</td>
                                    </tr>
                                    <tr>
                                        <td>Jabatan</td>
                                        <td>:</td>
                                        <td>$this->jabatan</td>
                                    </tr>
                                    <tr>
                                        <td>Gaji Pokok</td>
                                        <td>:</td>
                                        <td>$this->gaji</td>
                                    </tr>
                                    <tr>
                                        <td><h5>Tunjangan</h5></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class='d-block w-75 bg-secondary rounded  float-start' style='height: 2px'></span>    
                                        </td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Pendidikan</td>
                                        <td>:</td>
                                        <td>$this->pendidikan</td>
                                    </tr>
                                    <tr>
                                        <td>Tunjangan Pendidikan</td>
                                        <td>:</td>
                                        <td>$this->tunjangan</td>
                                    </tr>
                                    <tr>
                                        <td><h5>Potongan</h5></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class='d-block w-75 bg-secondary rounded  float-start' style='height: 2px'></span>    
                                        </td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Tabungan</td>
                                        <td>:</td>
                                        <td>$this->tabungan</td>
                                    </tr>
                                    <tr>
                                        <td>Pinjaman</td>
                                        <td>:</td>
                                        <td>$this->pinjaman</td>
                                    </tr>
                                    <tr>
                                        <td>Total Potongan</td>
                                        <td>:</td>
                                        <td>$this->potongan</td>
                                    </tr>
                                    <tr>
                                        <td><h5>Total Gaji Bersih</h5></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class='d-block w-75 bg-secondary rounded  float-start' style='height: 2px'></span>    
                                        </td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Total Gaji Bersih</td>
                                        <td>:</td>
                                        <td>$this->total</td>
                                    </tr>
                            </table>
                        </div>
                    ";
                    }
                }
      
                $cetak = new gaji($nama,$jabatan,$pendidikan,$pinjaman,$tabungan);
            }
      
            ?>
      <br><br>
      
    </center>

    <a class="mt-5 btn btn-outline-danger text-light" style="margin-top: -900px; position:absolute;top:0" href="latihan1.php">Kembali</a>
      

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
  


