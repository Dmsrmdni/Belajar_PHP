<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Gajih Karyawan</title>
    <style>
            body{
            font-family: 'Times New Roman', Times, serif;
            background-image: url(https://wallpapercave.com/wp/wp385364.jpg);
            background-size: cover;
            color:white;
        }
        .card{
            background-image: url(https://wallpapercave.com/wp/wp385364.jpg);
            background-size: cover;
            padding: 10px;
            border: 1px solid grey;

        }
    </style>
  </head>
  <body>
   <div class="container">
       <div class="row">
           <div class="text-center">
              <img src="assalam.png" class="rounded" alt="..." width="250" height="200">
              <h3>Penggajihan <br> PT MAKMUR SENTOSA</h3>
           </div>
       </div>
    <br>
    <!-- Cards -->
    <div class="row">
        <div class="card w-100 mx-auto">
            <div class="card text-white bg-dark mb-3">
                Data Penggajihan
            </div>
            <form action="" method="POST" class="d-flex p-3">
                <div class="col-md-6 pe-4">
                    <h3 class="mx-auto">Gaji</h3>
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama Karyawan</label>
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukan Nama" required>
                        </div>
                        <div class="mb-3">
                            <label for="jabatan" class="form-label">Jabatan</label>
                            <select class="form-select" aria-label="Default select example" id="jabatan" name="jabatan" required>
                                <option selected align="center">&rArr; Jabatan &lArr;</option>
                                <option value="Direktur">Direktur</option>
                                <option value="Manager">Manager</option>
                                <option value="Karyawan">Karyawan</option>
                                <option value="Ob">Ob</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="status" class="form-label">Status kerja</label>
                            <select class="form-select" aria-label="Default select example" id="status" name="status" required>
                            <option selected align="center">&rArr; Status &lArr;</option>
                                    <option value="Tetap">Tetap</option>
                                    <option value="Kontrak">Kontrak</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="lama_kerja" class="form-label">Lama kerja</label>
                            <input type="number" class="form-control" id="lama_kerja" name="lama_kerja"  placeholder="Lama Kerja"  required>
                        </div>
                        <button type="submit" class="btn btn-outline-primary" name="submit">Kirim</button>
                </div>
                <div class="col-md-6">
                    <h3 class="mx-auto">Potongan</h3>
                    <div class="mb-3">
                            <label for="pinjaman" class="form-label">Pinjaman</label>
                            <input type="number" class="form-control" id="pinjaman" name="pinjaman"  placeholder="Potongan"  required>
                        </div>
                        <div class="mb-3">
                            <label for="tabungan" class="form-label">Tabungan</label>
                            <input type="number" class="form-control" id="tabungan" name="tabungan"  placeholder="Tabungan"  required>
                        </div>
                </div>
            </form>
        </div>
    </div>
    </div>


    <?php if(isset($_POST["submit"])) :

        $nama = $_POST["nama"]; 
        $jabatan = $_POST["jabatan"]; 
        $status = $_POST["status"];
        $lama_kerja = $_POST["lama_kerja"];
        $pinjaman = $_POST["pinjaman"];
        $tabungan = $_POST["tabungan"];
        ?>

        <?php function biodata($nama,$jabatan,$status,$lama_kerja,$pinjaman,$tabungan){ ?>
            <div class=" container">
            <table class="table table-dark table-striped">
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td><?= $nama ?></td>
                </tr>
                <tr>
                    <td>jabatan</td>
                    <td>:</td>
                    <td><?= $jabatan ?></td>
                </tr>

                <?php 
                if($jabatan == "Direktur"){
                    $gaji = 10000000;
                }elseif($jabatan == "Manager"){
                    $gaji = 7500000;
                }elseif($jabatan == "Karyawan"){
                    $gaji = 5000000;
                }elseif($jabatan == "Ob"){
                    $gaji = 2500000;
                }
                ?>

                <tr>
                    <td>Gaji Pokok</td>
                    <td>:</td>
                    <td>Rp.<?= $gaji ?></td>
                </tr>
                <tr>
                    <td>Status Kerja</td>
                    <td>:</td>
                    <td><?= $status ?></td>
                </tr>

                <?php 
                if($status == "Tetap"){
                    $bonus = 2500000;
                }elseif($status == "Kontrak"){
                    $bonus = 0;
                }
                ?>

                <tr>
                    <td>Bonus Status Kerja</td>
                    <td>:</td>
                    <td>Rp. <?= $bonus ?></td>
                </tr>
                <tr>
                    <td>Lama kerja</td>
                    <td>:</td>
                    <td>Rp. <?= $lama_kerja ?></td>
                </tr>

                <?php 
                if($lama_kerja > 10 ){
                    $tunjangan = 1000000;
                }elseif($lama_kerja >= 6 && $lama_kerja <= 10){
                    $tunjangan = 500000;
                }elseif($lama_kerja > 0 && $lama_kerja  <= 5){
                    $tunjangan = 250000;
                }
                ?>
                
                <tr>
                    <td>Tunjangan Lama Kerja</td>
                    <td>:</td>
                    <td>Rp. <?= $tunjangan ?></td>
                </tr>
                <tr>
                    <td>Pinjaman</td>
                    <td>:</td>
                    <td>Rp. <?= $pinjaman ?></td>
                </tr>
                <tr>
                    <td>Tabungan</td>
                    <td>:</td>
                    <td>Rp. <?= $tabungan ?></td>
                </tr>
                <?php
                $total = ($gaji + $bonus + $tunjangan) - ($pinjaman + $tabungan);
                ?>
                <tr>
                    <td>Gaji Bersih</td>
                    <td>:</td>
                    <td>Rp. <?= $total?></td>
                </tr>
            </table>
        </div>

        <?php } ?>

        <p>
        <?php biodata($nama,$jabatan,$status,$lama_kerja,$pinjaman,$tabungan); ?>
        </p>

        <?php endif ?>










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