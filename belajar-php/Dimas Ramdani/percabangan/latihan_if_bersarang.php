<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Makanan</title>
</head>
<body bgcolor='black' style="color : white">
    <h1 style="padding-left : 20px"> Menu : </h1>

    <table style="padding-left : 50px">
 <dl>
  <tr>
  <td><dt>Makanan</dt></td>
  </tr>
  <tr>
    <td><li>Nasi Goreng : Rp. 10.000</li></td>
  </tr>
  <tr>
    <td><li>Mie Goreng  : Rp. 15.000</li></td>
  </tr>
  <tr>
    <td><li>Ayam Goreng : Rp. 20.000</li></td>
  </tr>
<tr>

<tr>
  <td><dt>Minuman</dt></td>
  </tr>
  <tr>
    <td><li>Air mineral : Rp. 7.000</li></td>
  </tr>
  <tr>
    <td><li>Jus : Rp. 12.000</li></td>
  </tr>
  <tr>
    <td><li>Thai Tea : Rp. 15.000</li></td>
  </tr>
<tr>
</table>
 <center>
    <!--form-->
    <form method="POST" action="">
            <table>
                <tr>
                    <td>Jenis Pesanan</td>
                    <td>:</td>
                    <td bgcolor="blue"><input type="text" name="jenis" style="background-color:yellow"></td>
                </tr>
                <tr>
                    <td>Nama Pesanan</td>
                    <td>:</td>
                    <td bgcolor="blue"><input type="text" name="menu" style="background-color:yellow"></td>
                </tr>
                <tr>
                    <td>Jumlah</td>
                    <td>:</td>
                    <td bgcolor="blue"><input type="number" name="jumlah" style="background-color:yellow"></td>
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

echo"<div style='margin: 40px auto ; width:fit-content'>";
if(isset($_POST["simpan"])){
$jenis=$_POST["jenis"];
$menu=$_POST["menu"];
$jumlah=$_POST["jumlah"];

if($jenis == "makanan"){
    if($menu == "nasi goreng"){
        $total=$jumlah * 10000;
    }
    else if($menu == "mie goreng"){
        $total=$jumlah * 15000;
    }
    else if($menu == "ayam goreng"){ 
        $total=$jumlah * 20000;
    }
    else{
        echo"Menu Tidak Ada <br>";
    }
}
else if($jenis == "minuman"){
    if($menu == "air mineral"){
        $total=$jumlah * 7000;
    }
    else if($menu == "jus"){
        $total=$jumlah * 12000;
    }
    else if($menu == "thai tea"){
        $total=$jumlah * 15000;
    }
    else{
        echo"Menu Tidak Ada <br>";
    }
}
else{
    echo"Jenis tidak ada <br>";
} 

    echo"Jenis Pesanan &nbsp; = $jenis <br>";
    echo"Nama Pesanan = $menu <br><hr>";
    echo"Jumlah &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; = $jumlah <br>";
    echo"Total &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; = $total <br>";

    /*Diskon*/
    if($total > 50000){
    $diskon = 0.2 * $total;
    echo"Diskon 20% &nbsp;&nbsp;&nbsp; = $diskon <br><hr>";
    $total = $total - $diskon;
    echo"Total Bayar &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; = $total <br>";
    }
    else{
        $diskon =0;
    }
}
echo"</div>";
?>