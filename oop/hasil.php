

<?php if(isset($_POST["proses"])) :
        $nama = $_POST["nama"];
        $jurusan = $_POST["jurusan"];
        $kelas = $_POST["kelas"];
?>

<?php class Rapot {

    public $nama;
    public $kelas;
    public $jurusan;

    public function Biodata($nama,$kelas,$jurusan) {
        echo"
        <table>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td>$nama </td>
            </tr>
            <tr>
                <td>Kelas</td>
                <td>:</td>
                <td>$kelas </td>
            </tr>
            <tr>
                <td>Jurusan</td>
                <td>:</td>
                <td>$jurusan </td>
            </tr> 
        </table>";

     } 
} 


$cetak = new Rapot();

echo $cetak ->Biodata($nama,$kelas,$jurusan);
echo "<hr>";
?>


<?php endif; ?>

<a href="rapot.php">kembali</a>