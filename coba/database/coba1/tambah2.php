<?php

require "functions.php";

if(isset($_POST["tambah"])){

    if(tambah($_POST) > 0){
        echo "data berhasil d tambahkan";
    }
    else{
        echo "data gagal di tambahkan";
    }
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
<body>
    <form action="" method="POST">
        <table>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="nama" required></td>
            </tr>
            <tr>
                <td>Nis</td>
                <td>:</td>
                <td><input type="text" name="nis" required></td>
            </tr>
            <tr>
                <td>kelas</td>
                <td>:</td>
                <td><input type="text" name="kelas" required></td>
            </tr>
            <tr>
                <td>jurusan</td>
                <td>:</td>
                <td><input type="text" name="jurusan" required></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><button type="submit" name="tambah">tambah</button></td>
            </tr>
        </table>
    </form>
</body>
</html>