<?php

require 'Rapot.php';

$rapot = new Rapot();
$res;

if(isset($_POST['proses'])) { 
    $rapot->identitas($_POST['nama'], $_POST['kelas'], $_POST['jurusan']);
    $res = $rapot->cetakRapot($_POST);
}
?>

<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://cdn.tailwindcss.com"></script>
        <?php if(isset($_POST['proses'])) : ?>
            <title>Data Rapot <?= $_POST['nama'] ?></title>
        <?php else : ?>
            <title>Proses Rapot</title>
        <?php endif ?>
    </head>
    <body>
        <main class="p-5">
            <?php if(!isset($res)) : ?>
                <form action="" method="post" class="w-1/2 min-w-[450px] shadow shadow-md shadow-black/30 p-5 mx-auto">
                    <div class="mb-6">
                        <h1 class="text-center text-4xl font-semibold">Proses Data Rapot</h1>
                        <span class="block mx-auto w-64 mt-1 h-[2px] rounded-md bg-slate-600"></span>
                    </div>
    
                    <h3 class="text-1xl font-semibold">Isi Indentitas Siswa</h3>
                    <span class="block h-[2px] rounded-sm w-[80%] bg-slate-600 mb-1"></span>
    
                    <div class="mb-3">
                        <label for="nama" class="mb-1 block">Nama</label>
                        <input type="text" name="nama" id="nama" required autocomplete="off" class="w-[95%] p-[3px] border px-1 border-2 rounded-md border-slate-400 focus:outline-indigo-300">
                    </div>
                    <div class="mb-3">
                        <label for="kelas" class="mb-1 block">Kelas</label>
                        <select name="kelas" id="kelas" required class="w-[95%] p-[3px] border px-1 border-2 rounded-md border-slate-400 focus:outline-indigo-300">
                            <option selected hidden>Pilih Kelas</span></option>
                            <option value="XI RPL 1">XI RPL 1</option>
                            <option value="XI RPL 2">XI RPL 2</option>
                            <option value="XI RPL 3">XI RPL 3</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="jurusan" class="mb-1 block">Jurusan</label>
                        <select name="jurusan" id="jurusan" required class="w-[95%] p-[3px] border px-1 border-2 rounded-md border-slate-400 focus:outline-indigo-300">
                            <option selected hidden>Pilih Jurusan</span></option>
                            <option value="Rekayasa Perangkat Lunak">RPL</option>
                            <option value="Teknik Bisnis Sepeda Motor">TBSM</option>
                            <option value="Teknik Kendaraan Ringan Otomotif">TKRO</option>
                        </select>
                    </div>
                    <h3 class="text-1xl font-semibold mt-4">Data Nilai</h3>
                    <span class="block h-[2px] rounded-sm w-[80%] bg-slate-600 mb-1"></span>
                    <div class="mb-3">
                        <label for="kehadiran" class="mb-1 block">Kehadiran</label>
                        <input type="number" name="kehadiran" id="kehadiran" required autocomplete="off" class="w-[95%] p-[3px] border px-1 border-2 rounded-md border-slate-400 focus:outline-indigo-300">
                    </div>
                    <div class="mb-3">
                        <label for="harian" class="mb-1 block">Harian</label>
                        <input type="number" name="harian" id="harian" required autocomplete="off" class="w-[95%] p-[3px] border px-1 border-2 rounded-md border-slate-400 focus:outline-indigo-300">
                    </div>
                    <div class="mb-3">
                        <label for="uts" class="mb-1 block">UTS</label>
                        <input type="number" name="uts" id="uts" required autocomplete="off" class="w-[95%] p-[3px] border px-1 border-2 rounded-md border-slate-400 focus:outline-indigo-300">
                    </div>
                    <div class="mb-3">
                        <label for="uas" class="mb-1 block">UAS</label>
                        <input type="number" name="uas" id="uas" required autocomplete="off" class="w-[95%] p-[3px] border px-1 border-2 rounded-md border-slate-400 focus:outline-indigo-300">
                    </div>
                    <button type="submit" name="proses" class="py-1 px-4 bg-blue-500 rounded text-white font-semibold float-right mr-[5%] active:bg-blue-800">Proses</button>
                    <div class="clear-both"></div>
                </form>

            <?php else : ?>
                <?= $res ?>
            <?php endif ?>
        </main>
    </body>
</html>