
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Gofud</title>
    <style>
            body{
            font-family:  Georgia, 'Times New Roman', Times, serif;
            background-image: url(https://mcdn.wallpapersafari.com/medium/33/20/UsYATi.jpg);
            background-size: cover;
            color: white;
        }
        .card{
            background-image: url(https://images7.alphacoders.com/408/thumbbig-408113.webp);
            background-size: cover;
            padding: 10px;
            border: 1px solid grey;

        }
        input{
            font-family: Arial, Helvetica, sans-serif;
        }
        option{
            font-family: Arial, Helvetica, sans-serif;
        }
        .card{
            box-shadow: inset 0px 5px 30px 10px black, 0px 0px 10px 2px gray;
        }

    </style>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="text-center">
                    <img src="../assalam.png" class="rounded" alt="..." width="260" height="210">
                </div>
            </div>
            <br>
            <!-- Cards -->
            <div class="row">
                <div class="card w-50 mx-auto">
                    <h1 align="center">
                        Data Pemesanan
                    </h1>
                        <span class="d-block w-50 bg-secondary rounded mx-auto" style="height: 2px"></span>
                    <form action="hasil_index.php" method="POST" class="d-flex p-4">
                        <div class="col-md-6 pe-4">
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama Barang</label>
                                <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukan Nama" required>
                            </div>

                            <div class="mb-3">
                                <label for="harga" class="form-label">Harga</label>
                                <input type="number" class="form-control" id="harga" name="harga" placeholder="Masukan harga" required>
                            </div>

                            <div class="mb-3">
                            </div>
                                <button type="submit" class="btn btn-outline-danger" name="submit">Kirim</button>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="jumlah_pesanan" class="form-label">Jumlah Pesanan</label>
                                <input type="number" class="form-control" id="jumlah_pesanan" name="jumlah_pesanan" placeholder="Masukan jumlah pesanan" required>
                            </div>

                            <div class="mb-3">
                                <label for="pembayaran" class="form-label">Pembayaran</label>
                                <select class="form-select" aria-label="Default select example" id="pembayaran" name="pembayaran" required>
                                <option selected hidden>Pembayaran </option>
                                        <option value="Cash">Cash</option>
                                        <option value="M-Banking">M-Banking</option>
                                        <option value="Gopay">Gopay</option>
                                        <option value="PickUp">PickUp</option>
                                        <option value="PickUp">PockUp</option>
                                </select>
                            </div>
                        </div>
                    </form>
                </div>
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