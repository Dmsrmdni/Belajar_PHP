<?php 

require "functions.php";

if(isset($_POST["submit"])){

    if ( tambah($_POST) > 0 ){
        echo"
        <script>
            alert('Data Berhasil Di Tambahkan');
            document.location.href = 'coba2.php';
        </script>
        ";
    }else{
        echo"
        <script>
            alert('Data Gagall Di Tambahkan');
            document.location.href = 'coba2.php';
        </script>
        ";
    }
    
}

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Tambah</title>
</head>
<body>
    <br><br>
    <div class="w-75 mx-auto">
        <form action="" method="post">
                <div class="mb-3">
                    <label for="Nama_Pemesan" class="form-label">Nama Pemesan</label>
                    <input type="text" class="form-control" id="Nama_Pemesan" name="Nama_Pemesan" placeholder="Nama Pemesan" required>
                </div>

                <div class="mb-3">
                    <label for="Jenis_Kamar" class="form-label">Jenis Kamar</label>
                        <select class="form-select" aria-label="Default select example" id="Jenis_Kamar" name="Jenis_Kamar" required>
                        <option selected hidden>Jenis Kamar </option>
                                <option value="Deluxe ROOM">Deluxe ROOM</option>
                                <option value="Sweet Room">Sweet Room</option>
                                <option value="Clasic">Clasic</option>
                        </select>
                </div>

                <div class="mb-3">
                    <label for="Lama_Pesanan" class="form-label">Lama Pesanan / Hari</label>
                    <input type="number" class="form-control" id="Lama_Pesanan" name="Lama_Pesanan" placeholder="Lama Pesanan" required>
                </div>

                <div class="mb-3">
                    <label for="Harga" class="form-label">Harga</label>
                    <input type="number" class="form-control" id="Harga" name="Harga" placeholder="Nilai Ujian" required>
                </div>
                <div class="mb-3">
                    <label for="Alamat" class="form-label">ALamat</label>
                    <textarea name="Alamat" class="form-control" id="Alamat" cols="15" rows="2" required></textarea>
                </div>
                <div class="d-grid gap-2 mx-auto col-2">
                    <button type="submit" class="btn btn-outline-primary" name="submit">Kirim</button>
                </div>
        </form>
    </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>