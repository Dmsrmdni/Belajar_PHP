<?php

// Struktur membuat array kosong
$hobi = [];

// Contohhh
$siswa = ["Haddad","Dinar","Dimas","Tasya","Aulia"];
$kelas = ["XI RPL 1","XI RPL 2","XI RPL 3"];

echo "<b>Bestie RPL 3 :</b> <br>";
// echo"<hr>";
// echo $siswa[0] . " -" . $kelas[0] . "<br>";
// echo $siswa[1] . " -" . $kelas[1] . "<br>";
// echo $siswa[2] . " -" . $kelas[2] . "<br>";
// echo $siswa[3] . " -" . $kelas[0] . "<br>";
// echo $siswa[4] . " -" . $kelas[1] . "<br>";

// menampilkan semua data menggunakan for
// for($i=0; $i<count($siswa); $i++){
//     echo "$siswa[$i] <br>";
// }

foreach($siswa as $data){
    echo $data . "<br>";
}

?>

