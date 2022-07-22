<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <form action="" method=POST>
            <h2>Data Siswa XI RPL 3</h2>
            <table>
                <tr>
                    <td>Jumlah Siswa</td>
                    <td>:</td>
                    <td><input type="number" name="jumlah"></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><button type="submit" name="proses" value="proses">Proses</button></td>
                </tr>
            </table>
        </form>

        <?php

        if(isset($_POST["proses"])) :

            $jumlah = $_POST["jumlah"];
        ?>

        <form action="hasilarrayform.php" method="POST">
            <table>
                <?php
                   for ($i=1; $i<=$jumlah;  $i++) :
                ?>
                <tr>
                    <td></td>
                    <td></td>
                    <td> <p  style="margin-top: 20px"> Data Siswa ke - <?php echo $i ?> </p></td>
                </tr>
                <tr>
                    <td>NIS</td>
                    <td>:</td>
                    <td><input type="text" name="nis[]"></td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td><input type="text" name="nama[]"></td>
                </tr>
                <tr>
                    <td>Kelas</td>
                    <td>:</td>
                    <td><input type="text" name="kelas[]"></td>
                </tr>
                <tr>
                    <td>Jurusan</td>
                    <td>:</td>
                    <td><input type="text" name="jurusan[]"></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td><textarea name="alamat[]" cols="20" rows="1"></textarea></td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>:</td>
                    <td>
                        <input type="radio" name="jenis_kelamin[]" value="Laki-laki"> Laki-laki
                        <input type="radio" name="jenis_kelamin[]" value="Perempuan"> Perempuan
                    </td>
                </tr>
                <tr>
                    <td>Agama</td>
                    <td>:</td>
                    <td><input type="text" name="agama[]"></td>
                </tr>
                <?php endfor ?>
                <tr>
                    <td></td>
                    <td></td>
                    <td><button type="submit" name="simpan" value="simpan">simpan</button></td>
                </tr>
            </table>
        </form>

        <?php endif ?>

    </center>
</body>
</html>