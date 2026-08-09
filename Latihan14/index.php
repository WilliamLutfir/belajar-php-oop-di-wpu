<!doctype html>
<html lang="id">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Abstract Class 2</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
        <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous" defer></script> -->
    </head>
    <body class="m-2" style="text-align: justify;">
        <h1>Abstract Class 2</h1>
        
        <hr class="border border-primary border-2 opacity-100">
        <pre class="text-wrap"><?php
        abstract class Produk{
            private $judul,
                    $penulis,
                    $penerbit,
                    $harga,
                    $diskon=0;
            public function __construct($judul="judul",$penulis="penulis",$penerbit="penerbit",$harga=0){
                $this->judul=$judul;
                $this->penulis=$penulis;
                $this->penerbit=$penerbit;
                $this->harga=$harga;
            }

            public function AmbilLabel(){return "$this->penulis, $this->penerbit";}

            abstract public function AmbilInfoProduk();
            
            public function AmbilInfo(){
                $str="{$this->judul} | {$this->AmbilLabel()} (Rp.{$this->AmbilHarga()}) ";
                return $str;
            }
            public function AmbilHarga(){
                return $this->harga - ($this->harga * ($this->diskon / 100));
            }
            public function AturHarga($h){
                if(!is_int($h)){
                    throw new Exception("Harga harus angka.");
                }else{$this->harga=$h;}
            }
            public function AmbilJudul(){
                return $this->judul;
            }
            public function AturJudul($j){
                if(!is_string($j)){
                    throw new Exception("Judul harus string.");
                }else{$this->judul=$j;}
            }
            public function AmbilPenulis(){
                return $this->penulis;
            }
            public function AturPenulis($penulis){
                if(!is_string($penulis)){
                    throw new Exception("Penulis harus string.");
                }else{$this->penulis=$penulis;}
            }
            public function AmbilPenerbit(){
                return $this->penerbit;
            }
            public function AturPenerbit($penerbit){
                if(!is_string($penerbit)){
                    throw new Exception("Penerbit harus string.");
                }else{$this->penerbit=$penerbit;}
            }
            public function AturDiskon($diskon){
                if(!is_int($diskon)){
                    throw new Exception("Diskon harus angka.");
                }else{$this->diskon=$diskon;}
            }
            public function AmbilDiskon(){
                return $this->diskon;
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
                $str="Komik : ". $this->AmbilInfo() ."- {$this->jmlhHlmn} Halaman.";
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
                $str="Game : ". $this->AmbilInfo() ."~ {$this->waktuMain} Jam.";
                return $str;
            }
        }

        class CetakInfoProduk{
            public $daftarProduk=[];
            public function TambahProduk(Produk $produk){
                $this->daftarProduk[]=$produk;
            }
            public function cetak(){
                $str="DAFTAR PRODUK : <br>";
                foreach($this->daftarProduk as $p){
                    $str.="- {$p->AmbilInfoProduk()} <br>";
                }
                return $str;
            }
        }

        $produk1=new Komik("Naruto","Masashi Kishimoto","Shonen Jump",50000,100);
        $produk2=new Game("Uncharted","Neil Druckmann","Sony Computer",250000,50);

        $cetakProduk=new CetakInfoProduk();
        $cetakProduk->TambahProduk($produk1);
        $cetakProduk->TambahProduk($produk2);
        echo $cetakProduk->cetak();

        ?></pre>
        
    </body>
</html>