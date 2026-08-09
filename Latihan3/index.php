<!doctype html>
<html lang="id">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Property & Method</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
        <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous" defer></script> -->
    </head>
    <body class="m-2">
        <h1>Property & Method</h1>
        <h2>Property</h2>
        <ul>
            <li>Merepresentasikan data/keadaan dari sebuah object.</li>
            <li>Variabel yg ada didlm object (member variable).</li>
            <li>Sama sprti variabel didlm PHP, ditambahkan dgn keyword visibility di dpnnya (public, private, protected).</li>
        </ul>
        <h2>Method</h2>
        <ul>
            <li>Merepresentasikan perilaku dari sebuah object.</li>
            <li>Function yg ada didlm object.</li>
            <li>Sama sprti function didlm PHP, ditambahkan dgn keyword visibility di dpnnya (public, private, protected).</li>
            <li>Walaupun utk method, tdk menuliskn keyword visibility jga bisa, tetapi akan di asumsikn visibility/access modifiernya menggunakan public.</li>
        </ul>
        <p><img src="gmbr/Mobil.PNG" width="450px"></p>
        <p><img src="gmbr/ClassMobil.PNG" width="450px"></p>
        <hr class="border border-primary border-2 opacity-100">
        <pre><?php
        // Jualan Produk
        // Komik
        // Game
        class Produk{
            public $judul="judul",
                   $penulis="penulis",
                   $penerbit="penerbit",
                   $harga=0;
            public function BlgHalo(){return "Halo Dunia";}
            public function AmbilLebel(){
                // $this, utk mengacu ke properti yg ada didlm class yg bersangkutan
                return "$this->penulis, $this->penerbit";
            }
        }
        $produk1=new Produk();
        $produk1->judul="Naruto"; // mengganti nilai defaultnya
        var_dump($produk1);
        echo "<br>";

        $produk2=new Produk();
        $produk2->judul="Uncharted";
        $produk2->genre="RPG"; // menambah properti baru, lgsg ke objeknya
        var_dump($produk2->judul);
        var_dump($produk2);
        echo "<br>";

        $produk3=new Produk();
        $produk3->judul="Naruto";
        $produk3->penulis="Masashi Kishimoto";
        $produk3->penerbit="Shonen Jump";
        $produk3->harga=50000;
        var_dump($produk3);
        echo "Komik : $produk3->judul, $produk3->penulis, $produk3->penerbit".".";
        echo "<br>";
        echo $produk3->BlgHalo();
        echo "<br>";
        echo $produk3->AmbilLebel();
        echo "<br><br>";

        $produk4=new Produk();
        $produk4->judul="Uncharted";
        $produk4->penulis="Neil Druckmann";
        $produk4->penerbit="Sony Computer";
        $produk4->harga="250000";
        var_dump($produk4);
        echo "Game : ". $produk4->AmbilLebel();
        echo "<br>";
        echo "Komik : ". $produk3->AmbilLebel();
        ?></pre>
    </body>
</html>