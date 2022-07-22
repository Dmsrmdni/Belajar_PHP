<?php

if(isset($_POST["simpan"])){
    $nis = $_POST["nis"];
    $nama = $_POST["nama"];
    $kelas = $_POST["kelas"];
    $jurusan = $_POST["jurusan"];
    $alamat = $_POST["alamat"];
    $jenis_kelamin = $_POST["jenis_kelamin"];
    $agama = $_POST["agama"];


}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body style="font-family: 'Times New Roman', Times, serif;">
<br><br>
    <center>
        <h2>Data siswa XI RPL 3</h2>
        <table border="1">
            <tr>
                <th>NIS</th>
                <th>Nama</th>
                <th>Kelas</th>
                <th>Jurusan</th>
                <th>Jenis Kelamin</th>
                <th>Alamat</th>
                <th>Agama</th>
        </tr>
        <?php
           for($a=0; $a<count($nama); $a++) :
         ?>
        <tr>
            <td><?= $nis[$a]; ?></td>
            <td><?= $nama[$a]; ?></td>
            <td><?= $kelas[$a]; ?></td>
            <td><?= $jurusan[$a]; ?></td>
            <td><?= $jenis_kelamin[$a]; ?></td>
            <td><?= $alamat[$a]; ?></td>
            <td><?= $agama[$a]; ?></td>
        <?php endfor ?>

        </tr>
    </table>
  </center>
</body>
</html>

