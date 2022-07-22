<?php

require "functions.php";

// query data siswa
$siswas = query("SELECT * FROM siswa");

if(isset($_POST["cari"])){

    $siswas = cari($_POST["keyy"]);
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<a href="tambah2.php"> tambah data</a>

<table>
    <form action="" method="POST">
        <tr>
            <td><input type="text" name="keyy" size="20" autofocus placeholder="Masukan Kata kunci" autocomplete="off"></td>
            <td><button type="submit" name="cari">Cari</button></td>
        </tr>
    </form>
</table>

<body>
    <table border="2">
        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Nama</th>
            <th>Nis</th>
            <th>Kelas</th>
            <th>jurusan</th>
        </tr>

        <?php $i = 1 ;?>
        <?php foreach ($siswas as $siswa) :?>
        <tr>
            <td><?= $i; ?></td>
            <td>
                <a href="ubah.php?id=<?= $siswa["id"]; ?>">ubah</a> | 
                <a href="hapus.php?id=<?= $siswa["id"]; ?>">hapus</a>
            </td>
            <td><?= $siswa["nama"]; ?></td>
            <td><?= $siswa["nis"]; ?></td>
            <td><?= $siswa["kelas"]; ?></td>
            <td><?= $siswa["jurusan"]; ?></td>
        </tr>
        <?php $i++; ?>
        <?php endforeach ?>

    </table>
</body>
</html>