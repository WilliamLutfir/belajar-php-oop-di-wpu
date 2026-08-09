<!doctype html>
<html lang="id">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Static Keyword</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
        <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous" defer></script> -->
    </head>
    <body class="m-2" style="text-align: justify;">
        <h1>Static Keyword</h1>
        <p><img src="gmbr/Kelas&ObjekMobil.PNG" width="450px"></p>
        <p><img src="gmbr/Kelas&ObjekMhs.PNG" width="450px"></p>
        <p>Class merupakn template dari object. Ketika menginstansiasi sebuah objek, disitu dpt menggunakn property & method yg ada didlm class.</p>
        <p>Tetapi sebenarnya, bisa mengakses property & method dlm konteks class, dgn menggunakn static keyword.</p>
        <p>Static keyword bisa digunakn utk membuat static property & static method, agar bisa mengakses property & method tsb pd konteks class.</p>
        <h2>Static Keyword</h2>
        <ul>
            <li>Member yg terikat dgn class, bukan dgn object.</li>
            <li>Nilai static akan selalu tetap (tdk direset) meskipun object diinstansiasi berulang kali.</li>
            <li>Membuat kode seolah-olah menjdi prosedural.</li>
            <li>Biasanya digunakn utk membuat fungsi bantuan/helper. (Karena tdk perlu instansiasi terlebih dahulu, bisa lgsg panggil property/methodnya).</li>
            <li>Biasa digunakn di class-class utility pd Framework.</li>
        </ul>
        <hr class="border border-primary border-2 opacity-100">
        <pre class="text-wrap"><?php
        class ContohStatic{
            public static $angka=1;                     // self=digunakan utk mengacu ke properti, jika menggunakan keyword static.
                                                        // $this, hanya bisa digunakan jika class diinstansiasi.  
            public static function Halo(){return "Halo " . self::$angka++ . " kali.";}
        }
        class Contoh{
            public $angka=1;
            public function Halo(){return "Halo " . $this->angka++ . " kali. <br>";}
        }
        class Contoh2{
            public static $angka=1;
            public function Halo(){return "Halo " . self::$angka++ . " kali. <br>";}
        }
        echo ContohStatic::$angka;
        echo "<br>";
        echo ContohStatic::Halo();
        echo "<br>";
        echo ContohStatic::Halo();
        echo "<hr class=\"border border-primary border-2 opacity-100\">";
        $obj=new Contoh;
        echo $obj->Halo();
        echo $obj->Halo();
        echo $obj->Halo();
        echo "<hr class=\"border border-primary border-2 opacity-100\">";
        $obj2=new Contoh;
        echo $obj2->Halo();
        echo $obj2->Halo();
        echo $obj2->Halo();
        echo "<hr class=\"border border-primary border-2 opacity-100\">";
        $obj3=new Contoh2;
        echo $obj3->Halo();
        echo $obj3->Halo();
        echo $obj3->Halo();
        echo "<hr class=\"border border-primary border-2 opacity-100\">";
        $obj4=new Contoh2;
        echo $obj4->Halo();
        echo $obj4->Halo();
        echo $obj4->Halo();

        ?></pre>
        
    </body>
</html>