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
        <h2>Penggajihan</h2>
    <form action="" method="POST">
        <table>
            <tr>
                <td></td>
                <td></td>
                <td><h3>Gaji</h3></td>
            </tr>
            <tr>
                <td>Masukan Nama Karyawan</td>
                <td>:</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>jabatan</td>
                <td>:</td>
                <td>
                    <select name="jabatan">
                        <option selected>--jabatan--</option>
                        <option value="Direktur">Direktur</option>
                        <option value="Manager">Manager</option>
                        <option value="Karyawan">Karyawan</option>
                        <option value="Ob">Ob</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Status Kerja</td>
                <td>:</td>
                <td>
                    <select name="status">
                        <option selected>--Status--</option>
                        <option value="Tetap">Tetap</option>
                        <option value="Kontrak">Kontrak</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Lama Kerja</td>
                <td>:</td>
                <td><input type="number" name="lama_kerja"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><h3>Potongan</h3></td>
            </tr>
            <tr>
                <td>Pinjaman</td>
                <td>:</td>
                <td><input type="number" name="pinjaman"></td>
            </tr>
            <tr>
                <td>tabungan</td>
                <td>:</td>
                <td><input type="number" name="tabungan"></td>
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
            $jabatan = $_POST["jabatan"]; 
            $status = $_POST["status"];
            $lama_kerja = $_POST["lama_kerja"];
            $pinjaman = $_POST["pinjaman"];
            $tabungan = $_POST["tabungan"];
    ?>

           <?php function biodata($nama,$jabatan,$status,$lama_kerja,$pinjaman,$tabungan){ ?>
                <table>
                    <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td><?= $nama ?></td>
                    </tr>
                    <tr>
                        <td>jabatan</td>
                        <td>:</td>
                        <td><?= $jabatan ?></td>
                    </tr>
                    <?php 
                    if($jabatan == "Direktur"){
                        $gaji = 10000000;
                    }elseif($jabatan == "Manager"){
                        $gaji = 7500000;
                    }elseif($jabatan == "Karyawan"){
                        $gaji = 5000000;
                    }elseif($jabatan == "Ob"){
                        $gaji = 2500000;
                    }else{
                        echo"jabatan tidak ada";
                    }
                    ?>
                    <tr>
                        <td>Gaji Pokok</td>
                        <td>:</td>
                        <td>Rp.<?= $gaji ?></td>
                    </tr>
                    <tr>
                        <td>Status Kerja</td>
                        <td>:</td>
                        <td><?= $status ?></td>
                    </tr>
                    <?php 
                    if($status == "Tetap"){
                        $bonus = 2500000;
                    }elseif($status == "Kontrak"){
                        $bonus = 0;
                    }
                    ?>
                    <tr>
                        <td>Bonus Status Kerja</td>
                        <td>:</td>
                        <td>Rp.<?= $bonus ?></td>
                    </tr>
                    <tr>
                        <td>Lama kerja</td>
                        <td>:</td>
                        <td><?= $lama_kerja ?></td>
                    </tr>
                    <?php 
                    if($lama_kerja > 10 ){
                        $tunjangan = 1000000;
                    }elseif($lama_kerja >= 6 && $lama_kerja <= 10){
                        $tunjangan = 500000;
                    }elseif($lama_kerja > 0 && $lama_kerja  <= 5){
                        $tunjangan = 250000;
                    }
                    ?>
                    <tr>
                        <td>Tunjangan Lama Kerja</td>
                        <td>:</td>
                        <td><?= $tunjangan ?></td>
                    </tr>
                    <tr>
                        <td>Pinjaman</td>
                        <td>:</td>
                        <td><?= $pinjaman ?></td>
                    </tr>
                    <tr>
                        <td>Tabungan</td>
                        <td>:</td>
                        <td><?= $tabungan ?></td>
                    </tr>
                    <?php
                      $total = ($gaji + $bonus + $tunjangan) - ($pinjaman + $tabungan);
                    ?>
                    <tr>
                        <td>Gaji Bersih</td>
                        <td>:</td>
                        <td><?= $total?></td>
                    </tr>
                </table>

            <?php } ?>
            
        <p>
            <?php biodata($nama,$jabatan,$status,$lama_kerja,$pinjaman,$tabungan); ?>
        </p>

    <?php endif ?>
</body>
</html>

