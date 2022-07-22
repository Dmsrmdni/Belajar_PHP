<?php 

if(isset($_POST["kirim"])){
    $panjang = $_POST["panjang"];
    $lebar = $_POST["lebar"];
      

    class Bangun_datar{
        protected $luas;
        protected $keliling;
    }

    // class Persegi extends Bangun_datar{
        
    //     public function Luas($sisi){
    //         echo "<h2>Menghitung Luas dan Keliling Persegi</h2>";
    //         echo "<h3>Luas Persegi</h3>";
    //         echo "Sisi : " .$sisi;
    //         $this->luas = $sisi * $sisi; 
    //         echo "<br>";
    //         echo "Luas Perseiginya Adalah : " .$this->luas;

    //     }

    //     public function Keliling($sisi){
    //         echo "<h3>Keliling Persegi</h3>";
            
    //         echo "Sisi : " .$sisi;
    //         $this->keliling = $sisi + $sisi + $sisi + $sisi; 
    //         echo "<br>";
    //         echo "Keliling Perseiginya Adalah : " .$this->keliling;
    //     }
    // }

    class Persegi_panjang extends Bangun_datar{
        public function Luas($panjang,$lebar){
            echo "<h2>Menghitung Luas dan Keliling Persegi Panjang</h2>";
            echo "<h3>Luas Persegi Panjang</h3>";
            echo "Panjang : " .$panjang;
            echo "<br>";
            echo "Lebar : " .$lebar;
            $this->luas = $panjang * $lebar; 
            echo "<br>";
            echo "Luas Perseigi Panjangnya Adalah : " .$this->luas;

        }

        public function Keliling($panjang,$lebar){
            echo "<h3>Keliling Persegi</h3>";

            echo "Panjang : " .$panjang;
            echo "<br>";
            echo "Lebar : " .$lebar;
            $this->keliling = (2*$panjang) + (2*$lebar); 
            echo "<br>";
            echo "Keliling Perseigi Panjangnya Adalah : " .$this->keliling;
        }
    }

}

    // class segitiga extends Bangun_datar{
        
    //     public function Luas($alas,$tinggi){
    //         echo "<h2>Menghitung Luas dan Keliling Segitiga</h2>";
    //         echo "<h3>Luas Segitiga</h3>";
    //         echo "Alas : " .$alas;
    //         echo "<br>";
    //         echo "Tinggi : " .$tinggi;
    //         $this->luas = $alas * $tinggi; 
    //         echo "<br>";
    //         echo "Luas Segitiganya Adalah : " .$this->luas;

    //     }

    //     public function Keliling($sisi){
    //         echo "<h3>Keliling Segitiga</h3>";

    //         echo "Sisi : " .$sisi;
    //         $this->keliling = (3*$sisi); 
    //         echo "<br>";
    //         echo "Keliling Segitiganya Adalah : " .$this->keliling;
    //     }
    // }

    // class Lingkaran extends Bangun_datar{
        
    //     public function Luas($jari){
    //         echo "<h2>Menghitung Luas dan Keliling Lingkaran</h2>";
    //         echo "<h3>Luas Lingkaran</h3>";
    //         echo "jari : " .$jari;
    //         $this->luas = (22/7) * $jari * $jari; 
    //         echo "<br>";
    //         echo "Luas Lingkarannya Adalah : " .$this->luas;

    //     }

    //     public function Keliling($jari){
    //         echo "<h3>Keliling Persegi</h3>";

    //         echo "Jari : " .$jari;
    //         $this->keliling = 2 * (22/7) * $jari; 
    //         echo "<br>";
    //         echo "Keliling Lingkarannya Adalah : " .$this->keliling;
    //     }
    // }

    // class trapesium extends Bangun_datar{
        
    //     public function Luas($sisi_a,$sisi_b,$tinggi){
    //         echo "<h2>Menghitung Luas dan Keliling Trapesium</h2>";
    //         echo "<h3>Luas Trapesium</h3>";
    //         echo "sisi Atas : " .$sisi_a;
    //         echo "<br>";
    //         echo "sisi Bawah : " .$sisi_b;
    //         echo "<br>";
    //         echo "Tinggi : " .$tinggi;
    //         $this->luas = (($sisi_a + $sisi_b) * $tinggi)/2; 
    //         echo "<br>";
    //         echo "Luas Trapesiumnya Adalah : " .$this->luas;

    //     }

    //     public function Keliling($sisi_a,$sisi_b,$sisi_m,$tinggi){
    //         echo "<h3>Keliling Trapesium</h3>";

    //         echo "sisi Atas : " .$sisi_a;
    //         echo "<br>";
    //         echo "sisi Bawah : " .$sisi_b;
    //         echo "<br>";
    //         echo "sisi Miring : " .$sisi_m;
    //         echo "<br>";
    //         echo "Tinggi : " .$tinggi;
    //         $this->keliling = $sisi_a + $sisi_b + $sisi_m + $tinggi;
    //         echo "<br>";
    //         echo "Keliling Trapesiumnya Adalah : " .$this->keliling;
    //     }
    // }

    echo "<u align='center'><h1>Bangun Datar</h1></u>";
    // $persegi = new Persegi();
    // echo $persegi->Luas(10);
    // echo $persegi->Keliling(5);
    // echo "<hr>";

    $persegi_panjang = new persegi_panjang();
    echo $persegi_panjang->Luas($panjang,$lebar);
    echo $persegi_panjang->Keliling($panjang,$lebar);
    echo "<hr>";

    // $segitiga = new segitiga();
    // echo $segitiga->Luas(20,15);
    // echo $segitiga->Keliling(10);
    // echo "<hr>";

    // $lingkaran = new lingkaran();
    // echo $lingkaran->Luas(14);
    // echo $lingkaran->Keliling(7);
    // echo "<hr>";

    // $traperisum = new trapesium();
    // echo $traperisum->Luas(20,5,21);
    // echo $traperisum->Keliling(5,8,9,12);
    // echo "<hr>";

?>





