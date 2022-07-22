<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <br>
    <center>
        <h2>Biodata</h2>
    <form action="" method="POST">
        <table>
            <tr>
                <td>Masukan Nama</td>
                <td>:</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Masukan Tanggal Lahir</td>
                <td>:</td>
                <td><input type="date" name="tanggal_lahir"></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td>
                    <input type="radio" name="jenis_kelamin" value="Laki-Laki">Laki-Laki
                    <input type="radio" name="jenis_kelamin" value="Perempuan">Perempuan
                </td>
            </tr>
            <tr>
                <td>Agama</td>
                <td>:</td>
                <td>
                    <select name="agama">
                        <option value="#">--agama--</option>
                        <option value="Islam">Islam</option>
                        <option value="Kristen">Kristen</option>
                        <option value="Buddha">Buddha</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Konguchu">Konguchu</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><textarea name="alamat" cols="30" rows="4"></textarea></td>
            </tr>
            <tr>
                <td>Hobby</td>
                <td>:</td>
                <td>
                    <input type="checkbox" name="hobby[]" value="Ngoding">Ngoding
                    <input type="checkbox" name="hobby[]" value="Futsal">Futsal
                    <input type="checkbox" name="hobby[]" value="Badminton">Badminton
                </td>
            </tr>
            <tr>
                <td>Status</td>
                <td>:</td>
                <td>
                    <select name="status">
                            <option value="#">--status--</option>
                            <option value="Pelajar">Pelajar</option>
                            <option value="Mahasiswa">Mahasiswa</option>
                            <option value="Pekerja">Pekerja</option>
                        </select>
                </td>
            </tr>
            <tr>
                <td>MotoHidup</td>
                <td>:</td>
                <td><textarea name="motohidup" cols="30" rows="4"></textarea></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><button type="submit" name="submit">Kirim</button></td>
            </tr>
        </table>
    </form>
    </center>
    
    <?php if(isset($_POST["submit"])) :

            $nama = $_POST["nama"]; 
            $tanggal_lahir = $_POST["tanggal_lahir"]; 
            $jenis_kelamin = $_POST["jenis_kelamin"];
            $agama = $_POST["agama"];
            $alamat = $_POST["alamat"];
            $hobby = $_POST["hobby"];
            $status = $_POST["status"];
            $motohidup = $_POST["motohidup"];
            ?>

           <?php function biodata($nama,$tanggal_lahir,$jenis_kelamin,$agama,$alamat,$hobby,$status,$motohidup){ ?>
                <table>
                    <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td><?= $nama ?></td>
                    </tr>
                    <tr>
                        <td>tanggal lahir</td>
                        <td>:</td>
                        <td><?= $tanggal_lahir ?></td>
                    </tr>
                    <tr>
                        <td>jenis kelamin</td>
                        <td>:</td>
                        <td><?= $jenis_kelamin ?></td>
                    </tr>
                    <tr>
                        <td>agama</td>
                        <td>:</td>
                        <td><?= $agama ?></td>
                    </tr>
                    <tr>
                        <td>alamat</td>
                        <td>:</td>
                        <td><?= $alamat ?></td>
                    </tr>
                    <tr>
                        <td>hobby</td>
                        <td>:</td>
                        <td>
                            <?php  foreach($hobby as $item) : ?>
                                 <li><?= $item ?></li>
                           <?php endforeach ?>
                        </td>
                    </tr>
                    <tr>
                        <td>status</td>
                        <td>:</td>
                        <td><?= $status ?></td>
                    </tr>
                    <tr>
                        <td>Motohidup</td>
                        <td>:</td>
                        <td><?= $motohidup ?></td>
                    </tr>
                </table>

            <?php } ?>
            
        <p>
            <?php biodata($nama,$tanggal_lahir,$jenis_kelamin,$agama,$alamat,$hobby,$status,$motohidup); ?>
        </p>

    <?php endif ?>
</body>
</html>

