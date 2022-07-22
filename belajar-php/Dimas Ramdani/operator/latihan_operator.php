<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Operator</title>
</head>
<body>
    <?php 
    $gaji_kotor = 4500000;
    $potongan_pajak = $gaji_kotor * 0.025;
    $potongan_bpjs = 200000;
    $potongan_infak = 50000;
    $total_potongan = $potongan_pajak + $potongan_bpjs + $potongan_infak;
    $tunjangan_transport = 10000;
    $total_hari = 24;
    $total_tunjangan = $tunjangan_transport * $total_hari;
    $total_gaji = ($gaji_kotor - $total_potongan) + $total_tunjangan;
    
    echo"Gaji kotor &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: Rp. <b>$gaji_kotor </b><br><hr>";
    echo"Potongan Pajak (2.5%) : Rp. <b>$potongan_pajak</b> <br>";
    echo"Potongan BPJS &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: Rp. <b>$potongan_bpjs</b> <br>";
    echo"Potongan Infak &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: Rp. <b>$potongan_infak</b> <br><hr>";
    echo"Total Potongan &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: Rp. <b>$total_potongan</b> <br><hr>";
    echo"Tunjangan Transport &nbsp;&nbsp;&nbsp;&nbsp;: Rp. <b>$tunjangan_transport</b> <br>";
    echo"Total Hari Kerja &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <b>$total_hari</b> Hari <br><hr>";
    echo"Total Tunjangan &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: Rp. <b>$total_tunjangan</b><br><hr>";
    echo"Perhitungan Gaji : <br>";
    echo"(Gaji Kotor - Total Potongan)+ Tunjangan <br>";
    echo"<b>($gaji_kotor - $total_potongan ) + $total_tunjangan </b> <br><hr>";
    echo"Gaji Bersih &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: Rp. <b>$total_gaji</b> <br>";

    ?>
</body>
</html>