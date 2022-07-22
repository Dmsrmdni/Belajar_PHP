<?php

$siswa = [
    [
        "nis" => 1001,
        "nama" => "Dimas Ramdani",
        "kelas" => "XI RPL 3",
        "eskul" => [
            ["nama_eskul" => "Seni Tari"],
            ["nama_eskul" => "Karawitan"],
            [
             "Futsal" =>[
              ["nama_futsal" => "futsal1"],
              ["nama_futsal" => "futsal2"]
              ]
            ]
            ]
    ]
];

foreach($siswa as $data){
    echo "Nis : " . $data["nis"] . "<br>";
    echo "Nama : " . $data["nama"] . "<br>";
    echo "Kelas : " . $data["kelas"] . "<br>";
    echo "Eskul : ";
    echo "<ul>";
     foreach($data["eskul"] as $data2){
         echo "<li>". $data2["nama_eskul"]. "</li><br>";
         foreach($data["Futsal"] as $data3){
            echo "<li>". $data3["nama_futsal"]. "</li><br>";
         }
     }
    echo "</ul>";
}

?>