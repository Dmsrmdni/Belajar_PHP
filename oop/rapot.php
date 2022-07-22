<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <form action="hasil.php" method="POST">
            <table>
                <tr>
                    <td>nama</td>
                    <td>:</td>
                    <td> <input type="text" name="nama" required> </td>
                </tr>
                <tr>
                    <td>kelas</td>
                    <td>:</td>
                    <td> <input type="text" name="kelas" required> </td>
                </tr>
                <tr>
                    <td>jurusan</td>
                    <td>:</td>
                    <td> <input type="text" name="jurusan" required> </td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td> <button type="submit" name="proses"> Proses </button> </td>
                </tr>
            </table>
        </form>

    <?php if(isset($_POST["proses"])) :
        $nama = $_POST["nama"];
        $jurusan = $_POST["jurusan"];
        $kelas = $_POST["kelas"];
?>


<?php endif; ?>


</body>
</html>


