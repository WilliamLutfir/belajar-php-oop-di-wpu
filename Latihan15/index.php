<!doctype html>
<html lang="id">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Interface</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
        <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous" defer></script> -->
    </head>
    <body class="m-2" style="text-align: justify;">
        <h1>Interface</h1>
        <ul>
            <li>Kelas abstrak yg sama sekali tdk memiliki implementasi.</li>
            <li>Murni merupakan template utk kelas turunannya.</li>
            <li>Tidak boleh memiliki properti, hanya deklarasi method saja.</li>
            <li>Semua method harus dideklarasikan dgn visibility public.</li>
            <li>Boleh mendeklarasikan __construct().</li>
            <li>Satu kelas turunannya boleh mengimplementasikan banyak interface.</li>
        </ul>
        <h2>Ingat Kembali Tentang Kelas Abstrak</h2>
        <p><img src="gmbr/KelasAbstrak.PNG" width="450px"></p>
        <p><img src="gmbr/KelasTurunan.PNG" width="450px"></p>
        <h2>Menggunakan Interface</h2>
        <p><img src="gmbr/ContohInterface.PNG" width="450px"></p>
        <p>Utk membuat interface, gunakan keyword interface sebagai ganti keyword abstract class.</p>
        <p>Didlm interface hanya boleh mempunyai deklarasi method saja (method biasa tanpa implementasinya).</p>
        <p>Murni sbg template, nantinya kelas turunannya wajib ada implementasi dari method yg ada didlm interface.</p>
        <p>Interface memang tdk boleh memiliki properti.</p>
        <p>Interface sama sprti abstract, tdk bisa diinstansiasi.</p>
        <p><img src="gmbr/ImplementasiInterface.PNG" width="450px"></p>
        <p>Di kelas turunannya, gunakan keyword implements ke kelas interface, sebagai ganti keyword extends.</p>
        <p>Di kelas turunannya, harus ada implementasi method yg ada didlm interface.</p>
        <p>Utk properti dipindahkan ke kelas turunannya, karena didlm interface tdk boleh ada properti.</p>
        <h2>Satu Kelas Turunan Mengimplementasikan Banyak Interface.</h2>
        <p><img src="gmbr/ImplementasiBanyakInterface.PNG" width="450px"></p>
        <p>Kelas turunan bisa mengimplementasikan banyak interface dgn menambahkan ',' & menyebutkan interface lainnya.</p>
        <p>Dgn mengimplementasikan interface lgi, konsekuensinya adalah wajib mengimplementasikan method yg ada didlm interfacenya.</p>
        <h2>Interface (2)</h2>
        <ul>
            <li>Dgn menggunakn type-hinting dpt melakukn 'Dependency Injection'. (type-hinting -> sebuah object yg bisa dijdikn sbg parameter).</li>
            <li>Pd akhirnya akan mencapai Polymorphism.</li>
        </ul>
        <hr class="border border-primary border-2 opacity-100">
        <pre class="text-wrap"><?php
        interface InfoProduk{
            public function AmbilInfoProduk();
        }
        abstract class Produk{
            protected $judul,
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

            abstract public function AmbilInfo();            
            
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

        class Komik extends Produk implements InfoProduk{
            public $jmlhHlmn;
            public function __construct($judul="judul",$penulis="penulis",$penerbit="penerbit",$harga=0,$jmlhHlmn=0){
                parent::__construct($judul,$penulis,$penerbit,$harga);
                $this->jmlhHlmn=$jmlhHlmn;
            }

            public function AmbilInfo(){
                $str="{$this->judul} | {$this->AmbilLabel()} (Rp.{$this->AmbilHarga()}) ";
                return $str;
            }
            public function AmbilInfoProduk(){
                              // Mengacu ke method parent
                $str="Komik : ". $this->AmbilInfo() ."- {$this->jmlhHlmn} Halaman.";
                return $str;
            }
        }
        class Game extends Produk implements InfoProduk{
            public $waktuMain;
            public function __construct($judul="judul",$penulis="penulis",$penerbit="penerbit",$harga=0,$waktuMain=0){
                parent::__construct($judul,$penulis,$penerbit,$harga);
                $this->waktuMain=$waktuMain;                
            }

            public function AmbilInfo(){
                $str="{$this->judul} | {$this->AmbilLabel()} (Rp.{$this->AmbilHarga()}) ";
                return $str;
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