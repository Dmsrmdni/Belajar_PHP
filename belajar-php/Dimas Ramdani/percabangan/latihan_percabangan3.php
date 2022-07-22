<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nilai Ujian</title>
</head>
<body bgcolor="lightblue">
    <center>
    <h1>Nilai Ujian</h1>
    <!--form-->
    <form method="POST" action="">
            <table>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td bgcolor="blue"><input type="text" name="nama"></td>
                </tr>
                 <tr>
                    <td>Kelas</td>
                    <td>:</td>
                    <td>
                     <select name="kelas" >
                        <option value="XII RPL 1" >XII RPL 1</option>
                        <option value="XII RPL 2">XII RPL 2</option>
                        <option value="XII RPL 3">XII RPL 3</option>
                    </select>
                </td>
                <tr>
                <tr>
                    <td>Nilai Matematika</td>
                    <td>:</td>
                    <td bgcolor="blue"><input type="number" name="mtk"></td>
                </tr>
                <tr>
                    <td>Nilai Indonesia</td>
                    <td>:</td>
                    <td bgcolor="blue"><input type="number" name="indo"></td>
                </tr>
                <tr>
                    <td>Nilai Inggris</td>
                    <td>:</td>
                    <td bgcolor="blue"><input type="number" name="ingg"></td>
                </tr>
                <tr>
                    <td>Nilai Produktif</td>
                    <td>:</td>
                    <td bgcolor="blue"><input type="number" name="pro"></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" name="simpan" value="Proses"></td>
                </tr>
            </table>
    </form>
    </center>
</body>
</html>

<?php 
if(isset($_POST["simpan"])){
    $nama = $_POST["nama"];
    $kelas = $_POST["kelas"];
    $nilai_mtk = $_POST["mtk"];
    $nilai_indo = $_POST["indo"];
    $nilai_inggris = $_POST["ingg"];
    $nilai_produktif = $_POST["pro"];
    
    echo"<hr> Nama = $nama <br>";
    echo"Kelas = $kelas <br>";
    echo"Nilai Matematika = $nilai_mtk <br>";
    echo"Nilai Indonesia = $nilai_indo <br>";
    echo"Nilai Inggris = $nilai_inggris <br>";
    echo"Nilai Produktif = $nilai_produktif <br>";

    $rata=($nilai_mtk + $nilai_indo + $nilai_inggris + $nilai_produktif)/4; 
    echo"Rata-Rata = $rata <br>";
if($rata >=90 && $rata <=100){
    echo"Grade = Grade A <br>";
    }
else if($rata >=80 && $rata <=89){
    echo"Grade = Grade B <br>";
}
else if($rata >=70 && $rata <=79){
    echo"Grade = Grade C <br>";
}
else if($rata >=60 && $rata <=69){
    echo"Grade = Grade D <br>";
}
else if($rata >= 0 && $rata <=59){
    echo"Grade = Grade E <br>";
}
else{
    echo"Sistem Tidak Valid";
}



}
?>