<?php

//Koneksi database
$conn = mysqli_connect("localhost","root","","contoh");


function query($query){
    // query data
    global $conn;
    $result = mysqli_query($conn,$query);
    $rows = [];
    // ambil data
    while ( $siswa = mysqli_fetch_assoc($result)){
        $rows[] = $siswa;
    }
    return $rows;
}

function tambah($data){
    global $conn;

    $nama = $data ["nama"];
    $nis = $data ["nis"];
    $kelas = $data ["kelas"];
    $jurusan = $data ["jurusan"];

    $query = "INSERT INTO siswa 
                Values
                ('','$nama','$nis','$kelas','$jurusan')
                ";

    mysqli_query($conn,$query);

    return mysqli_affected_rows($conn);

}

function hapus($id){
    global $conn;

    mysqli_query($conn,"DELETE FROM siswa WHERE id = $id");

    return mysqli_affected_rows($conn);
}

function ubah($data){
    global $conn;

    $id = $data["id"];
    $nama = $data ["nama"];
    $nis = $data ["nis"];
    $kelas = $data ["kelas"];
    $jurusan = $data ["jurusan"];

    $query ="UPDATE siswa SET
                nama = '$nama',
                nis = '$nis',
                kelas = '$kelas',
                jurusan = '$jurusan'
            WHERE id= $id
            ";

    mysqli_query($conn,$query);

    return mysqli_affected_rows($conn);
}


function cari($keyy){
    $query = "SELECT * FROM siswa 
         WHERE 
            nama like '%$keyy%' OR
            nis like '%$keyy%' OR
            kelas like '%$keyy%' OR
            jurusan like '%$keyy%'
    ";
    return query($query);
}

?>