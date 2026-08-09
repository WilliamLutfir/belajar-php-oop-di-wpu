<!doctype html>
<html lang="id">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Constructor</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
        <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous" defer></script> -->
    </head>
    <body class="m-2">
        <h1>Constructor</h1>
        <p>Constructor adalah method yg spesial yg ada didlm class, method ini akan otomatis dijlnkn ketika sebuah class diinstansiasi.</p>
        <hr class="border border-primary border-2 opacity-100">
        <pre><?php 
        class Produk{
            public $judul,
                   $penulis,
                   $penerbit,
                   $harga;
                         // nama method yang diawali __ disebut dgn magic method milik PHP
            public function __construct($judul="judul",$penulis="penulis",$penerbit="penerbit",$harga=0){
                $this->judul=$judul;
                $this->penulis=$penulis;
                $this->penerbit=$penerbit;
                $this->harga=$harga;}
            public function AmbilLabel(){return "$this->penulis, $this->penerbit";}}
        
        $produk1=new Produk("Naruto","Masashi Kishimoto","Shonen Jump",50000);
        $produk2=new Produk("Uncharted","Neil Druckmann","Sony Computer",250000);
        $produk3=new Produk("Dragon Ball");

        var_dump($produk1);
        echo "Komik : ". $produk1->AmbilLabel();
        echo "<br><br>";
        var_dump($produk2);
        echo "Game : ". $produk2->AmbilLabel();
        echo "<br><br>";
        var_dump($produk3);
        echo "Komik : ". $produk3->AmbilLabel();
        ?></pre>
    </body>
</html>