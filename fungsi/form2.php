<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Latihan</title>
  </head>
  <body>
      <br><br>
    <div class="card  mx-auto" style="width: 50rem; padding-left:10px">
        <div class="card-body">
              <form method="POST"> 
                  <div class="mb-3">
                      <label for="nama" class="form-label">Nama</label>
                      <input type="" class="form-control" id="nama" name="nama">
                  </div>
                  <div class="mb-3">
                      <label for="tanggal_lahir" class="form-label">Tanggal_lahir</label>
                      <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir">
                  </div>
                  <div class="mb-3">
                      <label class="form-label">Jenis Kelamin : </label>
                         <div class="form-check">
                              <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin1" value="Laki-Laki" checked>
                              <label class="form-check-label" for="jenis_kelamin1">
                                  Laki-Laki
                              </label>
                          </div>
                          <div class="form-check">
                              <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin2" value="Perempuan">
                              <label class="form-check-label" for="jenis_kelamin2">
                                  Perempuan
                              </label>
                          </div>
                  </div>
                  <div class="mb-3">
                      <label for="agama" class="form-label">agama</label>
                          <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" id="agama" name="agama">
                              <option selected align="center">====Agama====</option>
                              <option value="1">One</option>
                              <option value="2">Two</option>
                              <option value="3">Three</option>
                          </select>
                  </div>
                  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
              </form>
           </div>
        </div>

     <?php if(isset($_POST["submit"])) :

        $nama = $_POST["nama"]; 
        $tanggal_lahir = $_POST["tanggal_lahir"]; 
        $jenis_kelamin = $_POST["jenis_kelamin"];
        $agama = $_POST["agama"];
        ?>

        <?php function biodata($nama,$tanggal_lahir,$jenis_kelamin,$agama){ ?>
            <table>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td><?= $nama ?></td>
                </tr>
                <tr>
                    <td>tanggal lahir</td>
                    <td>:</td>
                    <td><?= $tanggal_lahir ?></td>
                </tr>
                <tr>
                    <td>jenis kelamin</td>
                    <td>:</td>
                    <td><?= $jenis_kelamin ?></td>
                </tr>
                <tr>
                    <td>agama</td>
                    <td>:</td>
                    <td><?= $agama ?></td>
                </tr>
            </table>

        <?php } ?>

        <p>
        <?php biodata($nama,$tanggal_lahir,$jenis_kelamin,$agama); ?>
        </p>

    <?php endif ?>



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