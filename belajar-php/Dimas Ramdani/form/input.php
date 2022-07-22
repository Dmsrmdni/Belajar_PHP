<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Biodata Diri</title>
</head>
<body>
    <center>
        <h2>Form Biodata Diri</h2>
        <!--form-->
        <form method="POST" action="">
            <table>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td><input type="text" name="nama"></td>
                </tr>
                <tr>
                    <td>Tempat Lahir</td>
                    <td>:</td>
                    <td><input type="text" name="tempat"></td>
                </tr>
                <tr>
                    <td>Tanggal Lahir</td>
                    <td>:</td>
                    <td><input type="date" name="tanggal"></td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>:</td>
                    <td>
                        <input type="radio" name="jk" value="Laki-Laki">laki-laki
                        <input type="radio" name="jk" value="Perempuan">Perempuan
                    </td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td><textarea name="Alamat" cols="20" rows="5" ></textarea></td>
                </tr>
                <tr>
                    <td>Agama</td>
                    <td>:</td>
                    <td>
                     <select name="Agama" >
                        <option value="islam">Islam</option>
                        <option value="kristen">Kristen</option>
                        <option value="hindu">Hindu</option>
                        <option value="buddha">Buddha</option>
                        <option value="konghucu">Konghucu</option>
                    </select>
                </td>
                <tr>
                    <td>Pendidikan terakhir</td>
                    <td>:</td>
                    <td>
                     <select name="jurusan" >
                        <option value="sd">SD</option>
                        <option value="smp">SMP</option>
                        <option value="sma/smk">SMA/SMK</option>
                        <option value="s1">S1</option>
                        <option value="s2">S2</option>
                    </select>
                </td>
                </tr>
                <tr>
                    <td>Status</td>
                    <td>:</td>
                    <td>
                     <select name="status" >
                        <option value="sudah menikah">Sudah Menikah</option>
                        <option value="belum menikah">Belum Menikah</option>
                        <option value="janda">Janda</option>
                        <option value="duda">Duda</option>
                    </select>
                </td>
                </tr>
                <tr>
                    <td>Hobi</td>
                    <td>:</td>
                    <td>
                        <input type="checkbox" name="hobi" value="membaca">Membaca
                        <input type="checkbox" name="hobi" value="menonton">Menonton
                        <input type="checkbox" name="hobi" value="badminton">Badminton
                    </td>
                </tr>
                <tr>
                    <td>Cita-cita</td>
                    <td>:</td>
                    <td>
                     <select name="cita-cita" >
                        <option value="programmer">Programmer</option>
                        <option value="pengusaha">Pengusaha</option>
                        <option value="dokter">Dokter</option>
                        <option value="pengacara">Pengacara</option>
                        <option value="wirausaha">Wirausaha</option>
                    </select>
                    </td>
                </tr>
                <tr>
                    <td>Kata-kata Bijak</td>
                    <td>:</td>
                    <td><textarea name="bijak" cols="20" rows="5" ></textarea></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" name="simpan" value="Kirim"></td>
                </tr>
            </table>
        </form>
    </center>
</body>
</html>

<?php 
if(isset($_POST["simpan"])){
    $nama = $_POST["nama"];
    $tempat_lahir = $_POST["tempat"];
    $tanggal_lahir = $_POST["tanggal"];
    $jenis_kelamin = $_POST["jk"];
    $alamat = $_POST["Alamat"];
    $agama = $_POST["Agama"];
    $jurusan = $_POST["jurusan"];
    $status = $_POST["status"];
    $hobi = $_POST["hobi"];
    $cita = $_POST["cita-cita"];
    $bijak = $_POST["bijak"];
    
    echo"======Biodata Diri=======<br>";
    echo"======================<br>";
    echo"Nama = $nama <br>";
    echo"Tempat Lahir = $tempat_lahir <br>";
    echo"Tanggal Lahir = $tanggal_lahir <br>";
    echo"Jenis Kelamin = $jenis_kelamin <br>";
    echo"Alamat = $alamat <br>";
    echo"Agama = $agama <br>";
    echo"Pendidikan Terakhir = $jurusan <br>";
    echo"Status = $status <br>";
    echo"Hobi = $hobi <br>";
    echo"Cita-cita = $cita <br>";
    echo"Kata-kata Bijak = $bijak <br>";
}
?>