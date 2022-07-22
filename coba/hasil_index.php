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
                        <h1>Data Pembayaran</h1>
                        <span class='d-block w-50 bg-secondary rounded  mx-auto' style='height: 2px'></span> 
                    </div>
                </div>
      <?php
      

            if(isset($_POST["submit"])){
                $nama = $_POST["nama"];
                $harga = $_POST["harga"];
                $jumlah_pesanan = $_POST["jumlah_pesanan"];
                $pembayaran = $_POST["pembayaran"];
          
    
                class Data{
                    protected $nama;
                    protected $harga;
                    protected $jumlah_pesanan;
                    protected $total;
                    protected $pembayaran;
                    protected $diskon;
                    protected $cashback;
                    protected $bayar;
                    
                    public function __construct($nama,$harga,$jumlah_pesanan,$pembayaran) {
                        $this->nama = $nama;
                        $this->harga = $harga;
                        $this->jumlah_pesanan = $jumlah_pesanan;
                        $this->pembayaran = $pembayaran;
                        $this->Total();
                        $this->Diskon();
                        $this->Pembayaran();
                        $this->Hasil();
                        
                    }

                    protected function Total() {
                        $this->total = ($this->harga * $this->jumlah_pesanan);
                    }
                    
                    protected function Diskon() {
                        if ($this->total >= 150000 && $this->total <= 250000){
                            $this->diskon = (10/100) * $this->total;
                        } else if ($this->total >= 250000){
                            $this->diskon = (15/100) * $this->total;
                        } else {
                            $this->diskon = 0;
                        }
                    }
      
                    protected function Pembayaran() {
                        if ($this->pembayaran == "Cash"){
                            $this->cashback = 0;
                        } else if ($this->pembayaran == "M-Banking"){
                            $this->cashback = $this->diskon + 0.025;
                        } else if ($this->pembayaran == "Gopay"){
                            $this->cashback =$this->total * (10/100) ;
                        } else if ($this->pembayaran == "PickUp"){
                            $this->cashback = $this->diskon + 0.015 ;
                        }else{
                            $this->cashback = 0;
                        }
                    }
                    
                    
                    protected function Hasil() {
                        $this->bayar = $this->total - $this->diskon - $this->cashback;
                    }
      

                    public function __destruct()
                    {
                    echo "
                        <div class='container'>
                            <table class='table table-dark table-striped'>
                                    <tr>
                                        <td>Nama Barang</td>
                                        <td>:</td>
                                        <td>$this->nama</td>
                                    </tr>
                                    <tr>
                                        <td>Harga</td>
                                        <td>:</td>
                                        <td>$this->harga</td>
                                    </tr>
                                    <tr>
                                        <td>Jumlah Pesanan</td>
                                        <td>:</td>
                                        <td>$this->jumlah_pesanan</td>
                                    </tr>
                                    <tr>
                                        <td>Total</td>
                                        <td>:</td>
                                        <td>$this->total</td>
                                    </tr>
                                    <tr>
                                        <td>Sistem Pembayaran</td>
                                        <td>:</td>
                                        <td>$this->pembayaran</td>
                                    </tr>
                                    <tr>
                                        <td>Diskon</td>
                                        <td>:</td>
                                        <td>$this->diskon</td>
                                    </tr>
                                    <tr>
                                        <td>cashback</td>
                                        <td>:</td>
                                        <td>$this->cashback</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class='d-block w-75 bg-secondary rounded  float-start' style='height: 2px'></span>    
                                        </td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>jumlah yang harus di bayar</td>
                                        <td>:</td>
                                        <td>$this->bayar</td>
                                    </tr>
                            </table>
                        </div>
                    ";
                    }
                }
      
                $cetak = new Data($nama,$harga,$jumlah_pesanan,$pembayaran);
            }
      
            ?>
      <br><br>
      
    </center>

    <a class="mt-5 btn btn-outline-danger text-light" style="margin-top: -900px; position:absolute;top:0" href="index.php">Kembali</a>
      

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
  


