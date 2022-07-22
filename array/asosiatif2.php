<?php

$artikel = [
    [
        "judul"   => "Belajar PHP & MYSQL untuk pemula",
        "penulis" => "petanikode"
    ],
    [
        "judul"   => "Tutorial PHP dari nol hingga mahir",
        "penulis" => "belajarkoding"
    ],
    [
        "judul"   => "Membuat Aplikasi web dengan PHP",
        "penulis" => "malasngoding"
    ]
];


foreach($artikel as $post){
    echo "<h2>" . $post["judul"] . "</h2>";
    echo "<p>" . $post["penulis"] . "</p>";
    echo "<hr>";
}

?>