<?php 

require "functions.php";

// ambil data d url
$id = $_GET["id"];


// query
$hot = query("SELECT * FROM hotel WHERE id = $id")[0];

if(isset($_POST["submit"])){

    if ( ubah($_POST) > 0 ){
        echo"
        <script>
            alert('Data Berhasil Di Ubah');
            document.location.href = 'coba2.php';
        </script>
        ";
    }else{
        echo"
        <script>
            alert('Data Gagall Di Ubah');
            document.location.href = 'coba2.php';
        </script>
        ";
    }
    
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah</title>
</head>
<body>
    <form action="" method="post">
        <table>
            <tr>
                <td><input type="hidden" name="id" value="<?= $hot["id"] ?>"></td>
            </tr>
            <tr>
                <td>Nama Pemesan</td>
                <td>:</td>
                <td><input type="text" name="Nama_Pemesan" value="<?= $hot["Nama_Pemesan"] ?>"></td>
            </tr>
            <tr>
                <td>Jenis Kamar</td>
                <td>:</td>
                <td><input type="text" name="Jenis_Kamar" value="<?= $hot["Jenis_Kamar"] ?>"></td>
            </tr>
            <tr>
                <td>Lama Pesanan</td>
                <td>:</td>
                <td><input type="text" name="Lama_Pesanan" value="<?= $hot["Lama_Pesanan"] ?>"></td>
            </tr>
            <tr>
                <td>Harga</td>
                <td>:</td>
                <td><input type="text" name="Harga" value="<?= $hot["Harga"] ?>"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><input type="text" name="Alamat" value="<?= $hot["Alamat"] ?>"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>
                    <button type="submit" name="submit">Submit</button>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>