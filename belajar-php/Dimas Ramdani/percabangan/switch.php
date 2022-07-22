<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bulan</title>
</head>
<body bgcolor="black" style=color:white >
    <center>
    <!--form-->
    <br><br><br><br>
    <form method="POST" action="">
            <table>
                <tr>
                    <td>No Bulan</td>
                    <td>:</td>
                    <td bgcolor="blue"><input type="number" name="bulan" style="background-color:red"></td>
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
$bulan=$_POST["bulan"];

switch($bulan){
    case 1:
        echo"Ini bulan Januari";
        break;
    case 2:
        echo"Ini bulan Februari";
        break;
    case 3:
        echo"Ini bulan Maret";
        break;
    case 4:
        echo"Ini bulan April";
        break;
    case 5:
        echo"Ini bulan Mei";
        break;
    case 6:
        echo"Ini bulan Juni";
        break;
    case 7:
        echo"Ini bulan Juli";
        break;
    case 8:
        echo"Ini bulan Agustus";
        break;
    case 9:
        echo"Ini bulan September";
        break;
    case 10:
        echo"Ini bulan Oktober";
        break;
    case 11:
        echo"Ini bulan November";
        break;
    case 12:
        echo"Ini bulan Desember";
        break;
    default:
        echo"Tidak Ada Bulan Ke $bulan";
        break;

}

echo"</div>";
}

?>