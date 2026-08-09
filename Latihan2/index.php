<!doctype html>
<html lang="id">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Class & Object</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
        <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous" defer></script> -->
    </head>
    <body class="m-2">
        <h1>Class & Object</h1>
        <h2>Ilustrasi Class & Object</h2>
        <p><img src="gmbr/IlustrasiClass.PNG" width="450px"></p>
        <p>Class adalah blueprint utk membuat sebuah objek.</p>
        <p><img src="gmbr/IlustrasiObject.PNG" width="450px"></p>
        <p>Object adalah implementasi/instansiasi dari rancangan class.</p>
        <div class="img-thumbnail overflow-auto" style="width: 450px;"><img src="gmbr/BanyakObject.PNG" height="400px"></div>
        <p>Dari rancangan class yg sudah dibuat, maka dpt membuat banyak object.</p>
        <h2>Class</h2>
        <ul>
            <li>Blueprint/Template utk membuat instance dari object.</li>
            <li>Class mendefinisikan object.</li>
            <li>Menyimpan data dan perilaku yg dsbt dgn property & method.</li>
        </ul>
        <h2>Membuat Class</h2>
        <ul>
            <li>Diawali dgn menuliskan keyword class, diikuti nama & dibatasi dengan {} utk menyimpan property & method.</li>
            <li>Aturan penamaan class sama seperti variabel.</li>
            <li>Kebiasaan dlm penamaan class, huruf pertama dari setiap suku kata harus kapital.</li>
        </ul>
        <p><img src="gmbr/MembuatClass.PNG" width="450px"></p>
        <h2>Object</h2>
        <ul>
            <li>Instance yg didefinisikan oleh Class.</li>
            <li>Banyak object dpt dibuat menggunakan 1 Class.</li>
            <li>Object dibuat dgn menggunakan keyword new.</li>
        </ul>
        <p><img src="gmbr/MembuatObject.PNG" width="450px"></p>
        <hr class="border border-primary border-2 opacity-100">
        <?php
            class Coba{

            }
            $a=new Coba();
            $b=new Coba();
            $c=new Coba();
            var_dump($a);
            echo "<br>";
            var_dump($b);
            echo "<br>";
            var_dump($c);
            echo "<br>";
            echo "<br>";

            // Jualan Produk
            // Komik
            // Game
            class Produk{

            }
            $produk1=new Produk();
            $produk2=new Produk();
            var_dump($produk1);
            echo "<br>";
            var_dump($produk2);
            echo "<br>";
        ?>
    </body>
</html>