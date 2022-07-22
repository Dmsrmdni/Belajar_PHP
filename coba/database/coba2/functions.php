<?php

// koneksi database
$conn = mysqli_connect("localhost","root","","percobaan");

function query($query){
    global $conn;
    // queri database
    $result = mysqli_query($conn,$query);
    $rows = [];
    // ambil data
    while ( $data = mysqli_fetch_assoc($result)){
        $rows[] = $data;
    }
    return $rows;
}


function tambah($data){
    global $conn;

    $nama = $data ["Nama_Pemesan"];
    $jenis = $data ["Jenis_Kamar"];
    $lama = $data ["Lama_Pesanan"];
    $harga = $data ["Harga"];
    $alamat = $data ["Alamat"];

    // query insert data
    $query = "INSERT INTO hotel 
        VALUES
        ('','$nama','$jenis','$lama','$harga','$alamat')
        ";

    mysqli_query($conn,$query);

    return mysqli_affected_rows($conn);

}

function hapus($id){
    global $conn;
    mysqli_query($conn,"DELETE FROM hotel WHERE id = $id");
    
    return mysqli_affected_rows($conn);

}

function ubah($data){
    global $conn;

    $id = $data ["id"];
    $Nama_Pemesan = $data ["Nama_Pemesan"];
    $Jenis_Kamar = $data ["Jenis_Kamar"];
    $Lama_Pesanan = $data ["Lama_Pesanan"];
    $Harga = $data ["Harga"];
    $Alamat = $data ["Alamat"];

    // query insert data
    $query = "UPDATE hotel SET
                Nama_Pemesan = '$Nama_Pemesan',
                Jenis_Kamar = '$Jenis_Kamar',
                Lama_Pesanan = '$Lama_Pesanan',
                Harga = '$Harga',
                Alamat = '$Alamat'
            WHERE id = $id
        ";

    mysqli_query($conn,$query);

    return mysqli_affected_rows($conn);

}


function cari($keyword){
    $query = "SELECT * FROM hotel 
                WHERE
               Nama_Pemesan like '%$keyword%' OR
               Jenis_Kamar like '%$keyword%' OR
               Lama_Pesanan like '%$keyword%' OR
               Alamat like '%$keyword%'

                 ";
     return query($query);
}






?>