<!DOCTYPE html>
   <html lang="en">
   <head>
       <meta charset="UTF-8">
       <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>TUGAS</title>
       <link rel="stylesheet" href="style.css">
   </head>
   <body style="background-image: url(https://wallpapercave.com/wp/wp2937416.jpg) ; color:white" >
       <h1 align="center">Destinasi Wisata Yogyakarta</h1>
       <form action="" method="post">
           <table align=center>
           <tr>
               <th></th>
               <th align="left"><u>Destinasi</u></th>
               <th><u>Harga Tiket</u></th>
           </tr>
           <tr>
               <td>1.</td>
               <td>Bukit Bintang</td>
               <td>Rp. 10.000</td>
            <tr>
               <tr>
               <td>2.</td>
               <td>Pantai Sadranan</td>
               <td>Rp. 15.000</td>
           </tr>
           <tr>
               <td>3.</td>
               <td>Candi Borobudur</td>
               <td>Rp. 50.000</td>
           </tr>
           <tr>
               <td>4.</td>
               <td>Candi Prambanan</td>
               <td>Rp. 50.000</td>
           </tr>
           <tr>
               <td>5.</td>
               <td>Keraton Yogyakarta</td>
               <td>Rp. 5.000</td>
           </tr>
           <tr>
               <td>6.</td>
               <td>Malioboro</td>
               <td>Rp. 5.000</td>
           </tr>
           <tr>
               <td>7.</td>
               <td>Pendopo Lawas</td>
               <td>Cafe</td>
           </tr>
           <tr>
               <td>8.</td>
               <td>Goa Pindul</td>
               <td>Rp. 100.000</td>
           </tr>
                   <td></td>
                   <td><select name="destinasi" id="">
                       <option selected>Pilih Destinasi</option>
                       <option value="1">Bukit Bintang</option>
                       <option value="2">Pantai Sadranan</option>
                       <option value="3">Candi Borobudur</option>
                       <option value="4">Candi Prambanan</option>
                       <option value="5">Keraton Yogyakarta</option>
                       <option value="6">Malioboro</option>
                       <option value="7">Pendopo Lawas -> Cafe</option>
                       <option value="8">Goa Pindul</option>
                   <td><input type="submit" value="Kirim" name="pilih"></td>
               </tr>
           </table>
           <br>
           <hr>
           <?php
               if (isset($_POST['pilih'])) {
                   $destinasi = $_POST['destinasi'];
                   if ($destinasi == '1') {
                       ?>
                     <h2 align="center">Bukit Bintang</h2>
                     <table align="center">
                       <tr>
                         <td>Tempat</td>
                         <td>:</td>
                         <td>Bukit Bintang</td>
                       </tr>
                       <tr>
                         <td>Harga Tikett</td>
                         <td>:</td>
                         <td>Rp. 10.000 /Orang</td>
                       </tr>
                       <tr>
                         <td>Jumlah Tiket yang ingin di beli</td>
                         <td>:</td>
                         <td><input type="number" name="jumlah"></td>
                       </tr>
                       <tr>
                         <td>Pembayaran</td>
                         <td>:</td>
                         <td><input type="number" name="bayar"></td>
                       </tr>
                       <tr>
                         <td></td>
                         <td></td>
                         <td><input type="submit" name="proses" value="Kirim"></td>
                       </tr>
                     </table>

                     <?php
                   } elseif ($destinasi == '2') { ?>
                     <h2 align="center">Pantai Sadrana</h2>
                     <table align="center">
                       <tr>
                         <td>Tempat</td>
                         <td>:</td>
                         <td>Pantai Sadrana</td>
                       </tr>
                       <tr>
                         <td>Harga Tiket </td>
                         <td>:</td>
                         <td>Rp. 15.000 /Orang</td>
                       </tr>
                       <tr>
                         <td>Jumlah Tiket yang ingin di beli</td>
                         <td>:</td>
                         <td><input type="number" name="jumlah"></td>
                       </tr>
                       <tr>
                         <td>Pembayaran</td>
                         <td>:</td>
                         <td><input type="number" name="bayar"></td>
                       </tr>
                       <tr>
                         <td></td>
                         <td></td>
                         <td><input type="submit" name="proses" value="Kirim"></td>
                       </tr>
                     </table>
                       
             <?php } elseif ($destinasi == '3') { ?>
                     <h2 align="center">Candi Borobudur</h2>
                     <table align="center">
                       <tr>
                         <td>Tempat</td>
                         <td>:</td>
                         <td>Candi Borobudur</td>
                       </tr>
                       <tr>
                         <td>Harga Tiket</td>
                         <td>:</td>
                         <td>Rp. 50.000 /Orang</td>
                       </tr>
                       <tr>
                         <td>Jumlah Tiket yang ingin di beli</td>
                         <td>:</td>
                         <td><input type="number" name="jumlah"></td>
                       </tr>
                       <tr>
                         <td>Pembayaran</td>
                         <td>:</td>
                         <td><input type="number" name="bayar"></td>
                       </tr>
                       <tr>
                         <td></td>
                         <td></td>
                         <td><input type="submit" name="proses" value="Kirim"></td>
                       </tr>
                     </table>
                     <?php } elseif ($destinasi == '4') { ?>
                     <h2 align="center">Candi Prambanan</h2>
                     <table align="center">
                       <tr>
                         <td>Tempat</td>
                         <td>:</td>
                         <td>Candi Prambanan</td>
                       </tr>
                       <tr>
                         <td>Harga Tiket</td>
                         <td>:</td>
                         <td>Rp. 50.000 /Orang</td>
                       </tr>
                       <tr>
                         <td>Jumlah Tiket yang ingin di beli</td>
                         <td>:</td>
                         <td><input type="number" name="jumlah"></td>
                       </tr>
                       <tr>
                         <td>Pembayaran</td>
                         <td>:</td>
                         <td><input type="number" name="bayar"></td>
                       </tr>
                       <tr>
                         <td></td>
                         <td></td>
                         <td><input type="submit" name="proses" value="Kirim"></td>
                       </tr>
                     </table>
                    
             <?php } elseif ($destinasi == '5') { ?>
                     <h2 align="center">Keraton Yogyakarta</h2>
                     <table align="center">
                       <tr>
                         <td>Tempat</td>
                         <td>:</td>
                         <td>Keraton Yogyakarta</td>
                       </tr>
                       <tr>
                         <td>Harga Tiket</td>
                         <td>:</td>
                         <td>Rp. 15.000 /Orang</td>
                       </tr>
                       <tr>
                         <td>Jumlah Tiket yang ingin di beli</td>
                         <td>:</td>
                         <td><input type="number" name="jumlah"></td>
                       </tr>
                       <tr>
                         <td>Pembayaran</td>
                         <td>:</td>
                         <td><input type="number" name="bayar"></td>
                       </tr>
                       <tr>
                         <td></td>
                         <td></td>
                         <td><input type="submit" name="proses" value="Kirim"></td>
                       </tr>
                     </table>
              
             <?php } elseif ($destinasi == '6') { ?>
                     <h2 align="center">Malioboro</h2>
                     <table align="center">
                       <tr>
                         <td>Tempat</td>
                         <td>:</td>
                         <td>Malioboro</td>
                       </tr>
                       <tr>
                         <td>Harga Tiket</td>
                         <td>:</td>
                         <td>Rp. 5.000 /Orang</td>
                       </tr>
                       <tr>
                         <td>Jumlah Tiket yang ingin di beli</td>
                         <td>:</td>
                         <td><input type="number" name="jumlah"></td>
                       </tr>
                       <tr>
                         <td>Pembayaran</td>
                         <td>:</td>
                         <td><input type="number" name="bayar"></td>
                       </tr>
                       <tr>
                         <td></td>
                         <td></td>
                         <td><input type="submit" name="proses" value="Kirim"></td>
                       </tr>
                     </table>
                   
            <?php } elseif ($destinasi == '7') { ?>
                     <h2 align="center">Pendopo Lawas -> Cafe</h2>
                     <h3 align="center">Silahkan Pilih Menu Makanan dan Minuman</h3>
                     <table align="center" cellpadding="6" border=2>
                       <tr>
                         <th colspan="2">MENU</th>
                       </tr>
                       <tr>
                         <th><u>Makanan</u></th>
                         <th><u>Harga</u></th>
                       </tr>
                       <tr>
                         <td>Chicken Nugget</td>
                         <td>Rp. 15.000</td>
                       </tr>
                       <tr>
                         <td>Spageti</td>
                         <td>Rp. 10.000</td>
                       </tr>
                       <tr>
                         <td>Mie Goreng</td>
                         <td>Rp. 13.000</td>
                       </tr>
                       <tr>
                         <th><u>Kopi</u></th>
                         <th><u>Harga</u></th>
                       </tr>
                       <tr>
                         <td>Americano</td>
                         <td>Rp. 13.000</td>
                       </tr>
                       <tr>
                         <td>Cappucino</td>
                         <td>Rp. 11.000</td>
                       </tr>
                       <tr>
                         <td>Exspreso</td>
                         <td>Rp. 12.000</td>
                       </tr>
                     </table>
                     <center>
                     <div  class="cafe">
                           <select name="pilih">
                           <option selected>Pilih Menu</option>
                           <option value="1">Chicken Nugget</option>
                           <option value="2">Spageti</option>
                           <option value="3">Mie Goreng</option>
                           <option value="4">Americano</option>
                           <option value="5">Cappucino</option>
                           <option value="6">Exspreso</option>
                         </select>
                        <input type="number" name="jumlah" placeholder="Jumlah Pesanan">
                        <input type="number" name="bayar" placeholder="Uang Pembayaran">
                        <input type="submit" name="proses" value="Kirim">
                        </center>
                     </div>
            <?php } elseif ($destinasi == '8') { ?>
                     <h2 align="center">Goa Pindul</h2>
                     <table align="center">
                       <tr>
                         <td>Tempat</td>
                         <td>:</td>
                         <td>Goa Pindul</td>
                       </tr>
                       <tr>
                         <td>Harga Tiket</td>
                         <td>:</td>
                         <td>Rp. 100.000 /Orang</td>
                       </tr>
                       <tr>
                         <td>Jumlah Tiket yang ingin di beli</td>
                         <td>:</td>
                         <td><input type="number" name="jumlah"></td>
                       </tr>
                       <tr>
                         <td>Pembayaran</td>
                         <td>:</td>
                         <td><input type="number" name="bayar"></td>
                       </tr>
                       <tr>
                         <td></td>
                         <td></td>
                         <td><input type="submit" name="proses" value="Kirim"></td>
                       </tr>
                     </table>
                       
             <?php }
               }
               if (isset($_POST['proses'])) {
                   $jumlah = $_POST['jumlah'];
                   $bayar = $_POST['bayar'];
                   $total = $jumlah * 10000;
                   if ($jumlah >= 10) {
                       $diskon = $total * 0.15;
                       $totalakhir = $total - $diskon;
                   } elseif ($jumlah >= 8) {
                       $diskon = $total * 0.1;
                       $totalakhir = $total - $diskon;
                   } elseif ($jumlah > 5) {
                       $diskon = $total * 0.05;
                       $totalakhir = $total - $diskon;
                   } else {
                       $diskon = 0;
                       $totalakhir = $total;
                   }
                   
                   $kembalian = $bayar - $totalakhir; ?> 
                   <br>
                   <br>
                   <table align="center" >
                     <tr>
                       <td>Total Bayar</td>
                       <td>:</td>
                       <td>Rp. <?= $totalakhir; ?></td>
                     </tr>
                     <tr>
                       <td>Diskon</td>
                       <td>:</td>
                       <td>Rp. <?= $diskon; ?></td>
                     </tr>
                     <tr>
                       <td>Uang Pembayaran<hr></td>
                       <td>:</td>
                       <td>Rp. <?= $bayar; ?><hr></td>
                     </tr>
                     <tr>
                       <td>Kembalian</td>
                       <td>:</td>
                       <td>Rp. <?= $kembalian; ?></td>
                     </tr>
                   </table>

             <?php
               }
             ?>
       </form>   
   </body>
   </html>