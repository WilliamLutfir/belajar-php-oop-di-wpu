<!doctype html>
<html lang="id">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Inheritance</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
        <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous" defer></script> -->
    </head>
    <body class="m-2">
        <h1>Inheritance</h1>
        <ul>
            <li>Merupakan konsep menciptakan hierarki antar kelas (Parent & Child).</li>
            <li>Child class, akan mewarisi semua properti & method dari parent-nya (yg visible).</li>
            <li>Child class, digunakan utk memperluas (extends) fungsionalitas dari parent-nya.</li>
        </ul>
        <h2>Kenapa Butuh Inheritance</h2>
        <pre><?php
        class Produk{
            public $judul,
                   $penulis,
                   $penerbit,
                   $harga,
                   $jmlhHlmn,
                   $waktuMain,
                   $tipe;
            public function __construct($judul="judul",$penulis="penulis",$penerbit="penerbit",$harga=0,$jmlhHlmn=0,$waktuMain=0,$tipe){
                $this->judul=$judul;
                $this->penulis=$penulis;
                $this->penerbit=$penerbit;
                $this->harga=$harga;
                $this->jmlhHlmn=$jmlhHlmn;
                $this->waktuMain=$waktuMain;
                $this->tipe=$tipe;
            }

            public function AmbilLabel(){return "$this->penulis, $this->penerbit";}
            public function AmbilInfoLengkap(){
                // Komik : Naruto | Masashi Kishimoto, Shonen Jump (Rp. 50000) - 100 Halaman.
                $str="{$this->tipe} : {$this->judul} | {$this->AmbilLabel()} (Rp.{$this->harga}) ";
                if($this->tipe == "Komik"){
                    $str.="- {$this->jmlhHlmn} Halaman.";
                }else if($this->tipe == "Game"){
                    $str.="~ {$this->waktuMain} Jam.";
                }
                return $str;
            }
        }

        class CetakInfoProduk{
            public function cetak(Produk $produk){
                $str="{$produk->judul} | {$produk->AmbilLabel()} (Rp. {$produk->harga})";
                return $str;
            }
        }

        $produk1=new Produk("Naruto","Masashi Kishimoto","Shonen Jump",50000,100,0,"Komik");
        $produk2=new Produk("Uncharted","Neil Druckmann","Sony Computer",250000,0,50,"Game");

        // Komik : Naruto | Masashi Kishimoto, Shonen Jump (Rp. 50000) - 100 Halaman.
        // Game : Uncharted | Neil Druckmann, Sony Computer (Rp. 250000) ~ 50 Jam.
        echo $produk1->AmbilInfoLengkap();
        echo "<br>";
        echo $produk2->AmbilInfoLengkap();
        ?></pre>
        
    </body>
</html>