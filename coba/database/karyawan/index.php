<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>UAS</title>
  </head>
 
        <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="../../assalam.png" width="60" height="50" class="me-2" alt="">
                    Deathsunshine
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav ms-auto">
                        <a class="nav-item nav-link active" href="index.php">Home</a>
                        <a class="nav-item nav-link" href="create.php">Tambah Data</a>
                        <a class="nav-item nav-link" href="#">About</a>
                    </div>
                </div>
            </div>
        </nav>

        <br><br>
        <!-- Cards -->
        <div class="row">
                <div class="card w-100 mx-auto">
                <div class="card-header">
                    <h3>Data Penggajihan</h3>
                    <span class="d-block w-50 bg-secondary rounded me-auto" style="height: 2px"></span>
                    <br>
                    <center><a href="create.php" class="btn btn-primary">Tambah Data</a></center>
                </div>

                <div class="card-body">
                <!-- TABLE Jurusan -->
                <table class="table table-bordered border-primary table-dark table-sm">
                    <thead>
                        <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Jabatan</th>
                        <th scope="col">Pendidikan</th>
                        <th scope="col">BPJS</th>
                        <th scope="col">Gaji</th>
                        <th scope="col">Tunjangan</th>
                        <th scope="col">Gaji Bersih</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    
                    <tbody>
                        <?php
                            include'../database.php';
                            $karyawan =  new Karyawan();
                            $no = 1;
                            foreach ($karyawan->index() as $data){
                        ?>
                        <tr>
                        <th scope="row"><?php echo $no++ ?></th>
                        <td><?= $data['nama'] ?></td>
                        <td><?= $data['jabatan'] ?></td>
                        <td><?= $data['pendidikan'] ?></td>
                        <td><?= $data['bpjs'] ?></td>
                        <?php 
                            if($data['jabatan'] == "Direktur"){
                                $gaji = 10000000;
                            }else if($data['jabatan'] == "Manager"){
                                $gaji = 75000000;
                            }else if($data['jabatan'] == "Karyawan"){
                                $gaji = 5000000;
                            }else if($data['jabatan'] == "Ob"){
                                $gaji = 2500000;
                            }
                        ?>
                        <td><?= $gaji ?></td>
                        <?php 
                            if($data['pendidikan'] == "S1"){
                                $tunjangan = 1000000;
                            }else if($data['pendidikan'] == "SMK"){
                                $tunjangan = 750000;
                            }else if($data['pendidikan'] == "SMP"){
                                $tunjangan = 500000;
                            }else if($data['pendidikan'] == "SD"){
                                $tunjangan = 250000;
                            }
                        ?>
                        <td><?= $tunjangan ?></td>

                        <?php $gaji_bersih = ($gaji + $tunjangan) - $data['bpjs'] ; ?>
                        <td><?= $gaji_bersih ?></td>
                        <td>
                            <form action="proses.php" method="post">
                                <a href="show.php?id=<?php echo $data['id']; ?>" class="btn btn-outline-warning">Show</a> ||
                                <a href="edit.php?id=<?php echo $data['id']; ?>" class="btn btn-outline-success">Edit</a> ||
                                <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
                                <input type="hidden" name="aksi" value="delete">
                                    <button type="submit" class="btn btn-outline-danger" name="save" onclick="return confirm('Apakah Anda Yakin Mau menghapus data ini ?')">
                                        Delete
                                    </button>
                           </form>
                        </td>
                        </tr>
                      <?php
                            }
                        ?>
                    </tbody>
                </table>
                 <!-- /TABLE jurusan -->
                    
                        
                   
                </div>
            </div>
        </div>
    

<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
-->
</body>
</html>