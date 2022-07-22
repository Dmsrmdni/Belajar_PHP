<?php 

  $jurusan="RPL";
  $kelas="10 RPL";

  if($jurusan == "TKRO"){
      if($kelas == "10 TKRO"){
          echo"Ini kelas 10 Teknik Kendaraan Ringan !";
      }
      else if($kelas == "11 TKRO"){
          echo"Ini kelas 11 Teknik Kendaraan Ringan !";
      }
      else if($kelas == "12 TKRO"){
          echo"Ini kelas 12 Teknik Kendaraan Ringan !";
      }
      else{
          echo"Kelas Tidak Ada!!";
      }
  }
  else if($jurusan == "TBSM"){
      if($kelas == "10 TBSM"){
          echo"Ini kelas 10 Teknik Sepada Motor !";
      }
      else if($kelas == "11 TBSM"){
          echo"Ini kelas 11 Teknik Sepada Motor !";
      }
      else if($kelas == "12 TBSM"){
          echo"Ini kelas 12 Teknik Sepada Motor !";
      }
      else{
          echo"Kelas Tidak Ada!!";
      }
  }
  else if($jurusan == "RPL"){
      if($kelas == "10 RPL"){
          echo"Ini kelas 10 Rekayasa Perangkat Lunak !";
      }
      else if($kelas == "11 RPL"){
          echo"Ini kelas 11 Rekayasa Perangkat Lunak !";
      }
      else if($kelas == "12 RPL"){
          echo"Ini kelas 12 Rekayasa Perangkat Lunak !";
      }
      else{
          echo"Kelas Tidak Ada!!";
      }
  }
  else{
      echo"Jurusan Tidak Ada";
  }

?>