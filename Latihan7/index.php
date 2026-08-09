<!doctype html>
<html lang="id">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Inheritance2</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
        <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous" defer></script> -->
    </head>
    <body class="m-2">
        <h1>Inheritance2</h1>
        <ul>
            <li>Merupakan konsep menciptakan hierarki antar kelas (Parent & Child).</li>
            <li>Child class, akan mewarisi semua properti & method dari parent-nya (yg visible).</li>
            <li>Child class, digunakan utk memperluas (extends) fungsionalitas dari parent-nya.</li>
        </ul>
        <h2>Ilustrasi Inheritance</h2>
        <p><img src="gmbr/IlustrasiInheritance.PNG" width="450px"></p>
        <p><img src="gmbr/IlustrasiInheritance2.PNG" width="450px"></p>
        <p><img src="gmbr/IlustrasiInheritance3.PNG" width="450px"></p>
        <p><img src="gmbr/ContohKodeInheritance.PNG"></p>
        <hr class="border border-primary border-2 opacity-100">
        <pre><?php
        class Produk{
            public $judul,
                   $penulis,
                   $penerbit,
                   $harga,
                   $jmlhHlmn,
                   $waktuMain;
            public function __construct($judul="judul",$penulis="penulis",$penerbit="penerbit",$harga=0,$jmlhHlmn=0,$waktuMain=0){
                $this->judul=$judul;
                $this->penulis=$penulis;
                $this->penerbit=$penerbit;
                $this->harga=$harga;
                $this->jmlhHlmn=$jmlhHlmn;
                $this->waktuMain=$waktuMain;
            }

            public function AmbilLabel(){return "$this->penulis, $this->penerbit";}
            public function AmbilInfoProduk(){
                $str="{$this->judul} | {$this->AmbilLabel()} (Rp.{$this->harga}) ";
                
                return $str;
            }
        }

        class Komik extends Produk{
            // Apabila class child tdk punya method constructor, maka akan menggunakan method constructor parentnya.
            public function AmbilInfoProduk(){
                // Komik : Naruto | Masashi Kishimoto, Shonen Jump (Rp. 50000) - 100 Halaman.
                $str="Komik : {$this->judul} | {$this->AmbilLabel()} (Rp.{$this->harga}) - {$this->jmlhHlmn} Halaman.";
                return $str;
            }
        }
        class Game extends Produk{
            // Apabila class child tdk punya method constructor, maka akan menggunakan method constructor parentnya.
            public function AmbilInfoProduk(){
                $str="Game : {$this->judul} | {$this->AmbilLabel()} (Rp.{$this->harga}) ~ {$this->waktuMain} Jam.";
                return $str;
            }
        }

        class CetakInfoProduk{
            public function cetak(Produk $produk){
                $str="{$produk->judul} | {$produk->AmbilLabel()} (Rp. {$produk->harga})";
                return $str;
            }
        }

        $produk1=new Komik("Naruto","Masashi Kishimoto","Shonen Jump",50000,100,0);
        $produk2=new Game("Uncharted","Neil Druckmann","Sony Computer",250000,0,50);

        // Komik : Naruto | Masashi Kishimoto, Shonen Jump (Rp. 50000) - 100 Halaman.
        // Game : Uncharted | Neil Druckmann, Sony Computer (Rp. 250000) ~ 50 Jam.
        
        echo $produk1->AmbilInfoProduk();
        echo "<br>";
        echo $produk2->AmbilInfoProduk();
        ?></pre>
        
    </body>
</html>