<?php

    class Mahasiswa extends Database{

        // menampilkan data dosen ke index.php
        public function index(){
            $datamahasiswa = mysqli_query($this->koneksi,
            "SELECT mahasiswa.id,mahasiswa.nim , mahasiswa.nama , dosen.nama as'nama_dosen' 
            FROM mahasiswa join dosen on mahasiswa.id_dosen = dosen.id");

            return $datamahasiswa;
        }

        public function create($nim,$nama,$id_dosen){
            mysqli_query($this->koneksi,
                        "INSERT INTO mahasiswa VALUES (null,'$nim','$nama','$id_dosen')"
                        );
        }

        public function edit($id){
            $datamahasiswa = mysqli_query($this->koneksi,"SELECT * FROM mahasiswa where id='$id'");
            return $datamahasiswa;
        }

        public function update($id,$nim,$nama,$id_dosen){
            mysqli_query($this->koneksi,
                            "UPDATE mahasiswa SET
                                nim = '$nim',
                                nama = '$nama',
                                id_dosen = '$id_dosen'
                            WHERE id = $id
                        ");
        }

        public function show($id){
            $datamahasiswa = mysqli_query($this->koneksi,"SELECT mahasiswa.id , mahasiswa.nim , mahasiswa.nama , dosen.nama as'nama_dosen' 
            FROM dosen
            join mahasiswa on dosen.id = mahasiswa.id_dosen WHERE mahasiswa.id='$id'");
            return $datamahasiswa;
        }

        public function delete($id){
            mysqli_query($this->koneksi,"DELETE FROM mahasiswa WHERE id='$id'");
        }
        
    }

?>