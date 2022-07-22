<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Gajih Karyawan</title>
    <style>
         body{
            font-family:  Georgia, 'Times New Roman', Times, serif;
            background-image: url(https://mcdn.wallpapersafari.com/medium/33/20/UsYATi.jpg);
            background-size: cover;
            color: white;
        }
        .card{
            background-image: url(https://i.pinimg.com/564x/cc/74/36/cc74366f1e5960053bb01fb3d8a45f9c.jpg);
            background-size: cover;
            padding: 10px;
            border: 2px solid grey;
            box-shadow: inset 0px 5px 30px 10px black, 0px 0px 10px 2px gray;
        }

        input{
            font-family: Arial, Helvetica, sans-serif;
        }
        option{
            font-family: Arial, Helvetica, sans-serif;
        }

    </style>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="text-center">
                    <img src="../assalam.png" class="rounded" alt="..." width="260" height="210">
                    <h3>Nilai Ujian Sekolah <br> SMK ASSALAAM BANDUNG</h3>
                </div>
            </div>
            <br>
            <!-- Cards -->
                <div class="card w-75 mx-auto">
                    <div class="card-header border-white border-bottom w-100">
                        <h4>Data Nilai</h4>
                    </div>
        
                    <form action="hasil2.php" method="POST">
                        <div class="w-75 mx-auto">
                            <br>
                                <div class="mb-3">
                                    <label for="nis" class="form-label">NIS</label>
                                    <input type="number" class="form-control" id="nis" name="nis" placeholder="Masukan nis" required>
                                </div>

                                <div class="mb-3">
                                    <label for="nama" class="form-label">Nama</label>
                                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukan Nama" required>
                                </div>

                                <div class="mb-3">
                                    <label for="jurusan" class="form-label">Jurusan</label>
                                    <select class="form-select" aria-label="Default select example" id="jurusan" name="jurusan" required>
                                        <option selected hidden>Jurusan</option>
                                        <option value="Teknik Sepeda Motor">Teknik Sepeda Motor</option>
                                        <option value="Teknik Kendaraan Ringan">Teknik Kendaraan Ringan</option>
                                        <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label for="kelas" class="form-label">kelas</label>
                                    <input type="text" class="form-control" id="kelas" name="kelas" placeholder="Masukan kelas" required>
                                </div>
                        </div>
                        
                            <br>
                            <h3 align="center" ><u> Nilai Ujian Sekolah </u></h3>
                            <br>
                        
                        <div class="row mx-auto container">
                            <div class="col-md-3 pe-4">
                                <h5 class="mx-auto">Bahasa indonesia</h5>
                                <span class="d-block w-100 bg-secondary rounded float-start" style="height: 2px"></span>
                                <br>

                            <div class="mb-3">
                                <label for="nilai_kehadiran_indo" class="form-label">Nilai Kehadiran</label>
                                <input type="number" class="form-control" id="nilai_kehadiran_indo" name="nilai_kehadiran_indo" placeholder="Nilai Kehadiran" required>
                            </div>

                            <div class="mb-3">
                                <label for="nilai_tugas_indo" class="form-label">Nilai Tugas</label>
                                <input type="number" class="form-control" id="nilai_tugas_indo" name="nilai_tugas_indo" placeholder="Nilai Tugas" required>
                            </div>

                            <div class="mb-3">
                                <label for="nilai_absen_indo" class="form-label">Nilai Absen</label>
                                <input type="number" class="form-control" id="nilai_absen_indo" name="nilai_absen_indo" placeholder="Nilai Absen" required>
                            </div>

                            <div class="mb-3">
                                <label for="nilai_ujian_indo" class="form-label">Nilai Ujian</label>
                                <input type="number" class="form-control" id="nilai_ujian_indo" name="nilai_ujian_indo" placeholder="Nilai Ujian" required>
                            </div>
                        </div>

                        <div class="col-md-3 pe-4">
                                <h5 class="mx-auto">Bahasa Inggris</h5>
                                <span class="d-block w-100 bg-secondary rounded float-start" style="height: 2px"></span>
                                <br>

                            <div class="mb-3">
                                <label for="nilai_kehadiran_inggris" class="form-label">Nilai Kehadiran</label>
                                <input type="number" class="form-control" id="nilai_kehadiran_inggris" name="nilai_kehadiran_inggris" placeholder="Nilai Kehadiran" required>
                            </div>

                            <div class="mb-3">
                                <label for="nilai_tugas_inggris" class="form-label">Nilai Tugas</label>
                                <input type="number" class="form-control" id="nilai_tugas_inggris" name="nilai_tugas_inggris" placeholder="Nilai Tugas" required>
                            </div>

                            <div class="mb-3">
                                <label for="nilai_absen_inggris" class="form-label">Nilai Absen</label>
                                <input type="number" class="form-control" id="nilai_absen_inggris" name="nilai_absen_inggris" placeholder="Nilai Absen" required>
                            </div>
                            
                            <div class="mb-3">
                                <label for="nilai_ujian_inggris" class="form-label">Nilai Ujian</label>
                                <input type="number" class="form-control" id="nilai_ujian_inggris" name="nilai_ujian_inggris" placeholder="Nilai Ujian" required>
                            </div>
                        </div>

                        <div class="col-md-3 pe-4">
                                <h5 class="mx-auto">Matematika</h5>
                                <span class="d-block w-100 bg-secondary rounded float-start" style="height: 2px"></span>
                                <br>

                                <div class="mb-3">
                                <label for="nilai_kehadiran_mtk" class="form-label">Nilai Kehadiran</label>
                                <input type="number" class="form-control" id="nilai_kehadiran_mtk" name="nilai_kehadiran_mtk" placeholder="Nilai Kehadiran" required>
                            </div>

                            <div class="mb-3">
                                <label for="nilai_tugas_mtk" class="form-label">Nilai Tugas</label>
                                <input type="number" class="form-control" id="nilai_tugas_mtk" name="nilai_tugas_mtk" placeholder="Nilai Tugas" required>
                            </div>

                            <div class="mb-3">
                                <label for="nilai_absen_mtk" class="form-label">Nilai Absen</label>
                                <input type="number" class="form-control" id="nilai_absen_mtk" name="nilai_absen_mtk" placeholder="Nilai Absen" required>
                            </div>

                            <div class="mb-3">
                                <label for="nilai_ujian_mtk" class="form-label">Nilai ujian</label>
                                <input type="number" class="form-control" id="nilai_ujian_mtk" name="nilai_ujian_mtk" placeholder="Nilai Ujian" required>
                            </div>
                        </div>

                        <div class="col-md-3 pe-4">
                                <h5 class="mx-auto">Produktif</h5>
                                <span class="d-block w-100 bg-secondary rounded float-start" style="height: 2px"></span>
                                <br>

                            <div class="mb-3">
                                <label for="nilai_kehadiran_produktif" class="form-label">Nilai Kehadiran</label>
                                <input type="number" class="form-control" id="nilai_kehadiran_produktif" name="nilai_kehadiran_produktif" placeholder="Nilai Kehadiran" required>
                            </div>

                            <div class="mb-3">
                                <label for="nilai_tugas_produktif" class="form-label">Nilai Tugas</label>
                                <input type="number" class="form-control" id="nilai_tugas_produktif" name="nilai_tugas_produktif" placeholder="Nilai Tugas" required>
                            </div>

                            <div class="mb-3">
                                <label for="nilai_absen_produktif" class="form-label">Nilai Absen</label>
                                <input type="number" class="form-control" id="nilai_absen_produktif" name="nilai_absen_produktif" placeholder="Nilai Absen" required>
                            </div>

                            <div class="mb-3">
                                <label for="nilai_ujian_produktif" class="form-label">Nilai Ujian</label>
                                <input type="number" class="form-control" id="nilai_ujian_produktif" name="nilai_ujian_produktif" placeholder="Nilai Ujian" required>
                        </div>

                        <div class="d-grid gap-2 mx-auto">
                          <button type="submit" class="btn btn-outline-primary" name="submit">Kirim</button>
                        </div>
                    </form>
                </div>
            </div>
            <br>
                <div class="card-footer text-muted ">
                    <div align="center">&#10148 XI RPL 3 &#10148 </div>
                    <div>Copyright &copy; 2022 by Dmsrmdni_</div>
                </div>
        </div>
        <br><br>


        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
        -->
    </body>
</html>