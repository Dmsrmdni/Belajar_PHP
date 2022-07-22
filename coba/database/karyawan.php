<?php

    class Karyawan extends Database{

        // menampilkan data dosen ke index.php
        public function index(){
            $datakaryawan = mysqli_query($this->koneksi,"SELECT * FROM karyawan");

            return $datakaryawan;
        }

        public function create($nama,$jabatan,$pendidikan,$bpjs){
            mysqli_query($this->koneksi,
                        "INSERT INTO karyawan VALUES (null,'$nama','$jabatan','$pendidikan','$bpjs')"
                        );
        }

        public function edit($id){
            $datakaryawan = mysqli_query($this->koneksi,"SELECT * FROM karyawan where id='$id'");
            return $datakaryawan;
        }

        public function update($id,$nama,$jabatan,$pendidikan,$bpjs){
            mysqli_query($this->koneksi,
                            "UPDATE karyawan SET
                               nama = '$nama',
                               jabatan ='$jabatan',
                               pendidikan ='$pendidikan',
                               bpjs ='$bpjs'
                            WHERE id = $id
                        ");
        }

        public function show($id){
            $datakaryawan = mysqli_query($this->koneksi,"SELECT * FROM karyawan WHERE id='$id'");
            return $datakaryawan;
        }

        public function delete($id){
            mysqli_query($this->koneksi,"DELETE FROM karyawan WHERE id='$id'");
        }
        
    }

?>