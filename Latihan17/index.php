<!doctype html>
<html lang="id">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Namespace</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
        <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous" defer></script> -->
    </head>
    <body class="m-2" style="text-align: justify;">
        <h1>Namespace</h1>
        <p>Sebuah cara utk mengelompokkan program ke dlm sebuah <b>package</b> tersendiri/menjdi bagian yg memiliki identitas tersendiri.</p>
        <p>Atau ada yg menyebutnya sbg teknik <b>Encapsulation</b></p>
        <h2>Knp Program Harus Di Package?</h2>
        <p>PHP tdk mengizinkan utk memiliki 2 class dgn nama yg sama.</p>
        <p>Ini tdk menjdi masalah jika bekerja sendiri. Kita tau class yg telah dibuat apa saja, jdi pastinya tdk akan membuat class berikutnya dgn nama yg sama.</p>
        <p>Bagaimana jika bekerja dgn tim? artinya kita harus tau anggota tim membuat nama kelas apa saja, sehingga ketika kita membuat class baru, namanya tdk sama dgn yg telah dibuat oleh anggota tim.</p>
        <p>Bagaimana jika menggunakan script/library dari pihak ke-3?</p>
        <p>Utk itu kita membutuhkan teknik Namespace, supaya nnti ketika kita membuat sebuah class dgn nama yg sama, program secara keseluruhan masih bisa mengidentifikasi kalau class ini berbeda, memisahkan class asalnya dari library atau dari class asalnya dari developer. Jdi nntinya programnya dpt membedakan class tsb.</p>
        <h2>Aturan Penulisan Namespace</h2>
        <p><b>namespace Vendor\Namespace\SubNamespace\...\&lt;NamaClass&gt;</b></p>
        <h2>Alias</h2>
        <p>Membuat nama yg lebih pendek jika namespace terlalu panjang.</p>
        <span>Contoh :</span>
        <ul>
            <li><b>use</b> app\produk\User <b>as</b> ProdukUser;</li>
            <li><b>use</b> app\service\User <b>as</b> ServiceUser;</li>
        </ul>
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
        // Alias -> nama yg lebih pendek jika namespace terlalu panjang
        use app\produk\User as ProdukUser;
        use app\service\User as ServiceUser;

        new ProdukUser();
        echo "<br>";
        new ServiceUser();
        ?></pre>
        
    </body>
</html>