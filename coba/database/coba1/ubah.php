<?php

require "functions.php";

$id = $_GET["id"];

// quey
$sis = query("SELECT * FROM siswa WHERE id = $id")[0];

if(isset($_POST["tambah"])){

    if(ubah($_POST) > 0){
        echo "data berhasil di ubah";
    }
    else{
        echo "data gagal di ubah";
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
                <td><input type="hidden" name="id" value="<?= $sis["id"]; ?>"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="nama" value="<?= $sis["nama"];?>" required></td>
            </tr>
            <tr>
                <td>Nis</td>
                <td>:</td>
                <td><input type="text" name="nis" value="<?= $sis["nis"]; ?>"  required></td>
            </tr>
            <tr>
                <td>kelas</td>
                <td>:</td>
                <td><input type="text" name="kelas" value="<?= $sis["kelas"]; ?>" required></td>
            </tr>
            <tr>
                <td>jurusan</td>
                <td>:</td>
                <td><input type="text" name="jurusan" value="<?= $sis["jurusan"]; ?>" required></td>
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