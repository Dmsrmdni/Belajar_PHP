<?php

require "functions.php";

$datas = query("SELECT * FROM hotel");

if(isset($_POST["cari"])){

  $datas = cari($_POST["keyword"]);
}

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Index</title>
  </head>
  <body>
    <h1 align="center">Data Pemesanan Hotel</h1>
    <br><br>

    <table class="table table-hover table-bordered w-75 mx-auto">
        <form action="" method="POST">
          <tr>
            <td colspan="7">
                  <input type="text" name="keyword" size="40" autofocus placeholder="Masukan Keyword Pencarian" autocomplete="off">
                  <button type="submit" name="cari" class="col-2 btn btn-primary btn-sm">Cari</button>
                  <a style="padding-left: 200px;" href="tambah.php"  class="fs-4">Tambah Data </a></td>
            </td>
          </tr>
        </form>

        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Nama pemesan</th>
            <th>Jenis Kamar</th>
            <th>Lama pesanan</th>
            <th>Harga</th>
            <th>Alamat</th>
        </tr>

        <?php $i=1; ?>
        <?php foreach ($datas as $data) : ?>
        <tr>
            <td><?= $i; ?></td>
            <td>
                <a href="ubah.php?id=<?= $data["id"];?>">Ubah</a> |
                <a href="hapus.php?id=<?= $data["id"];?>" onclick="return confirm('yakinn??');">Hapus</a>
            </td>
            <td><?= $data["Nama_Pemesan"]; ?></td>
            <td><?= $data["Jenis_Kamar"]; ?></td>
            <td><?= $data["Lama_Pesanan"]; ?></td>
            <td><?= $data["Harga"]; ?></td>
            <td><?= $data["Alamat"]; ?></td>
        </tr>
        <?php $i++?>
        <?php endforeach ?>

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