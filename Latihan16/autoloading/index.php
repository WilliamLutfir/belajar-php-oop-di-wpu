<!doctype html>
<html lang="id">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Autoloading</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
        <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous" defer></script> -->
    </head>
    <body class="m-2" style="text-align: justify;">
        <h1>Autoloading</h1>
        <p>Proses memanggil class (file) tanpa harus menggunakn require.</p>
        <p>Biasanya program yg menerapkan OOP, 1 class ditulis dlm 1 file.</p>
        <h2>Knp Ngk Menggunakn require/require once/include Saja?</h2>
        <p>Menggunakn require/require once/include jika aplikasi yg dibuat masih sederhana & berkerja sendiri.</p>
        <p>Mungkin nntinya akan bekerja sama dgn tim utk membuat sebuah aplikasi yg besar, jika menggunakn require/require once/include saja, itu nntinya akan merepotkn.</p>
        <h2>spl_autoload_register()</h2>
        <p>Digunakan utk require ke banyak file class, dlm satu deklarasi saja.</p>
        <hr class="border border-primary border-2 opacity-100">
        <pre class="text-wrap"><?php
        require_once "app/init.php";       
        $produk1=new Komik("Naruto","Masashi Kishimoto","Shonen Jump",50000,100);
        $produk2=new Game("Uncharted","Neil Druckmann","Sony Computer",250000,50);

        $cetakProduk=new CetakInfoProduk();
        $cetakProduk->TambahProduk($produk1);
        $cetakProduk->TambahProduk($produk2);
        echo $cetakProduk->cetak();
        
        echo "<hr class=\"border border-primary border-2 opacity-100\">";
        new Coba();
        ?></pre>
        
    </body>
</html>