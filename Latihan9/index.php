<!doctype html>
<html lang="id">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Visibility/Access Modifier</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
        <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous" defer></script> -->
    </head>
    <body class="m-2">
        <h1>Visibility/Access Modifier</h1>
        <ul>
            <li>Konsep yg digunakn utk mengatur akses terhadap property & method pd sebuah objek.</li>
            <li>Ada 3 keyword visibility : <b>public</b>, <b>protected</b>, <b>private</b>.</li>
            <li><b>public</b>, dpt diakses/digunakn dimana saja, bahkan di luar kelas.</li>
            <li><b>protected</b>, hanya dpt digunakn didlm sebuah kelas beserta turunannya.</li>
            <li><b>private</b>, hanya dpt digunakn didlm sebuah kelas tertentu saja.</li>
        </ul>
        <h2>Kenapa Harus Menggunakan Visibility</h2>
        <ul>
            <li>Hanya memperlihatkan aspek dari class yg dibutuhkan oleh 'client'.</li>
            <li>Dpt menentukan kebutuhan yg jelas utk sebuah objek.</li>
            <li>Dpt memberikan kendali pd kode utk menghindari 'bug'.</li>
        </ul>
        <hr class="border border-primary border-2 opacity-100">
        <pre class="text-wrap"><?php
        class Produk{
            public $judul,
                   $penulis,
                   $penerbit;
            private $harga;
            protected $diskon=0;
            public function __construct($judul="judul",$penulis="penulis",$penerbit="penerbit",$harga=0){
                $this->judul=$judul;
                $this->penulis=$penulis;
                $this->penerbit=$penerbit;
                $this->harga=$harga;
            }

            public function AmbilLabel(){return "$this->penulis, $this->penerbit";}
            public function AmbilInfoProduk(){
                $str="{$this->judul} | {$this->AmbilLabel()} (Rp.{$this->harga}) ";
                return $str;
            }
            public function AmbilHarga(){
                return $this->harga - ($this->harga * ($this->diskon / 100));
            }
        }

        class Komik extends Produk{
            public $jmlhHlmn;
            public function __construct($judul="judul",$penulis="penulis",$penerbit="penerbit",$harga=0,$jmlhHlmn=0){
                parent::__construct($judul,$penulis,$penerbit,$harga);
                $this->jmlhHlmn=$jmlhHlmn;
            }

            public function AmbilInfoProduk(){
                              // Mengacu ke method parent
                $str="Komik : ". parent::AmbilInfoProduk() ."- {$this->jmlhHlmn} Halaman.";
                return $str;
            }
        }
        class Game extends Produk{
            public $waktuMain;
            public function __construct($judul="judul",$penulis="penulis",$penerbit="penerbit",$harga=0,$waktuMain=0){
                parent::__construct($judul,$penulis,$penerbit,$harga);
                $this->waktuMain=$waktuMain;                
            }

            public function AmbilInfoProduk(){
                $str="Game : ". parent::AmbilInfoProduk() ."~ {$this->waktuMain} Jam.";
                return $str;
            }
            public function AturDiskon($diskon){
                $this->diskon=$diskon;
            }
        }

        class CetakInfoProduk{
            public function cetak(Produk $produk){
                $str="{$produk->judul} | {$produk->AmbilLabel()} (Rp. {$produk->harga})";
                return $str;
            }
        }

        $produk1=new Komik("Naruto","Masashi Kishimoto","Shonen Jump",50000,100);
        $produk2=new Game("Uncharted","Neil Druckmann","Sony Computer",250000,50);

        // Komik : Naruto | Masashi Kishimoto, Shonen Jump (Rp. 50000) - 100 Halaman.
        // Game : Uncharted | Neil Druckmann, Sony Computer (Rp. 250000) ~ 50 Jam.
        
        echo $produk1->AmbilInfoProduk();
        echo "<br>";
        echo $produk2->AmbilInfoProduk();
        echo "<hr class=\"border border-primary border-2 opacity-100\">";
        $produk2->AturDiskon(50);
        echo $produk2->AmbilHarga()." (kena diskon 50%)";
        echo "<br>";
        echo $produk1->AmbilHarga();
        
        ?></pre>
        
    </body>
</html>