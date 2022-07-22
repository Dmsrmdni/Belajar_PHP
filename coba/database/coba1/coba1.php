<?php

//Koneksi database
$conn = mysqli_connect("localhost","root","","contoh");

// query data siswa
$result = mysqli_query($conn,"SELECT * FROM siswa");

// mengecek error
if(!$result){
    echo mysqli_error($conn);
}

// // ambil data siswa
// while( $siswa = mysqli_fetch_assoc($result) ) {
//     var_dump($siswa);
// }


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
        <?php while( $siswa = mysqli_fetch_assoc($result) ) :?>
        <tr>
            <td><?= $i; ?></td>
            <td>
                <a href="">ubah</a> | 
                <a href="">hapus</a>
            </td>
            <td><?= $siswa["nama"]; ?></td>
            <td><?= $siswa["nis"]; ?></td>
            <td><?= $siswa["kelas"]; ?></td>
            <td><?= $siswa["jurusan"]; ?></td>
        </tr>
        <?php $i++; ?>
        <?php endwhile ?>

    </table>
</body>
</html>