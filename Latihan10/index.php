<!doctype html>
<html lang="id">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Setter & Getter (Accessor Method)</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
        <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous" defer></script> -->
    </head>
    <body class="m-2" style="text-align: justify;">
        <h1>Setter & Getter (Accessor Method)</h1>
        <p>Erat kaitannya dgn visibility. Dgn menggunakan Setter & Getter, utk menghindari membuat property dgn visibility public. Karena sebaiknya tdk membiarkan bagian dari luar objek bisa mengakses property secara langsung. Utk itu harus mengubah visibility menjadi protected atau private, tergantung desain yg nnti akan dibuat. Dgn mengubah visibility menjdi protected atau private, artinya tdk lgi mendptkn akses secara langsung, jika ingin mendptkn isi dari property atau bahkan mengatur nilai baru ke sebuah property.</p>
        <p>Utk itu dibutuhkan sebuah method yg dpt membaca & melihat nilai dari property ataupun mengubah nilainya.</p>
        <p>Method itu akan disebut dgn Setter & Getter. Method Utk mengatur & method utk mengambil nilai.</p>
        <p>Sebenarnya didlm php, Setter & Getter ini sudah disediakan menjadi magic method yaitu, __set() & __get(). Akan lebih jelas jika sudah memahami konsep overloading (membuat function yg sama tetapi dgn parameter yg berbeda).</p>
        <h2>Visibility</h2>
        <ul>
            <li><b>public</b>, dpt diakses/digunakn dimana saja, bahkan di luar kelas.</li>
            <li><b>protected</b>, hanya dpt digunakn didlm sebuah kelas beserta turunannya.</li>
            <li><b>private</b>, hanya dpt digunakn didlm sebuah kelas tertentu saja.</li>
        </ul>
        <hr class="border border-primary border-2 opacity-100">
        <pre class="text-wrap"><?php
        class Produk{
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
            public function AmbilInfoProduk(){
                $str="{$this->judul} | {$this->AmbilLabel()} (Rp.{$this->harga}) ";
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
                $this->diskon=$diskon;
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
        echo "<hr class=\"border border-primary border-2 opacity-100\">";

        echo $produk1->AmbilJudul();
        echo "<br>";
        echo $produk1->AturJudul("Boruto");
        echo $produk1->AmbilJudul();
        echo "<br>";
        echo $produk1->AmbilHarga();
        echo $produk1->AturHarga(60000);
        echo "<br>";
        echo $produk1->AmbilHarga();
        echo "<br>";
        echo $produk1->AmbilInfoProduk();
        echo "<br>";
        echo $produk1->AmbilDiskon();
        echo "<br>";
        echo $produk2->AmbilDiskon();

        ?></pre>
        
    </body>
</html>