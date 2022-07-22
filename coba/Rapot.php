<?php

class Rapot {
    private $nama,
            $kelas,
            $jurusan;
    
    public function identitas($nama, $kelas, $jurusan) {
        $this->nama = $nama;
        $this->kelas = $kelas;
        $this->jurusan = $jurusan;
    }

    private function hitungNilaiRapot($kehadiran, $harian, $uts, $uas) {
        return ($kehadiran + $harian + $uts + $uas) / 4;
    }

    public function cetakRapot($nilai) {
        $kehadiran = $nilai['kehadiran'];
        $harian = $nilai['harian']; 
        $uts = $nilai['uts'];
        $uas = $nilai['uas']; 

        return "<div class='mt-4 p-5 shadow rounded-md shadow-black/30 w-1/2 mx-auto min-w-[450px]'>
                    <div class='mb-4'>
                        <h3 class='text-2xl font-semibold'>Data Rapot $this->nama</h3>
                        <span class='block h-[2px] w-[95%] bg-slate-400 rounded-sm'></span>
                    </div>
                    <div class='mb-2'>
                        <h3 class='text-1xl font-semibold'>Indentitas</h3>
                        <span class='block h-[2px] w-[80px] bg-slate-400 rounded-sm'></span>
                    </div>
                    <table cellpadding='5px'>
                        <tr>
                            <td>Nama</td>
                            <td>:</td>
                            <td>$this->nama</td>
                        </tr>
                        <tr>
                            <td>Kelas</td>
                            <td>:</td>
                            <td>$this->kelas</td>
                        </tr>
                        <tr>
                            <td>Jurusan</td>
                            <td>:</td>
                            <td>$this->jurusan</td>
                        </tr>
                    </table>

                    <div class='mb-2 mt-4'>
                        <h3 class='text-1xl font-semibold'>Nilai</h3>
                        <span class='block h-[2px] w-[80px] bg-slate-400 rounded-sm'></span>
                    </div>
                    <table cellpadding='5px'>
                        <tr>
                            <td>Kehadiran</td>
                            <td>:</td>
                            <td>$kehadiran</td>
                        </tr>
                        <tr>
                            <td>Harian</td>
                            <td>:</td>
                            <td>$harian</td>
                        </tr>
                        <tr>
                            <td>UTS</td>
                            <td>:</td>
                            <td>$uts</td>
                        </tr>
                        <tr>
                            <td>UAS</td>
                            <td>:</td>
                            <td>$uas</td>
                        </tr>
                        <tr>
                            <td>
                                <span class='block h-[2px] w-[150px] bg-slate-400 rounded-sm'></span>
                            </td>
                        </tr>
                        <tr class='font-semibold'>
                            <td>Total</td>
                            <td>:</td>
                            <td>". $this->hitungNilaiRapot($kehadiran, $harian, $uts, $uas) . "</td>
                        </tr>
                    </table>
                </div>";
    }
}