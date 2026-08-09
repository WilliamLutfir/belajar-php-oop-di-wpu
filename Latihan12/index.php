<!doctype html>
<html lang="id">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Constant</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
        <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous" defer></script> -->
    </head>
    <body class="m-2" style="text-align: justify;">
        <h1>Constant</h1>
        <p>Sebuah identifier utk menyimpan nilai. Dimna nilai-nya tdk dpt berubah ketika sudah diatur didlm program.</p>
        <ul>
            <li>define()</li>
            <li>const</li>
        </ul>
        <p>Dgn menggunakan define(), tdk bisa menyimpan konstanta didlm kelas. Tetapi const bisa disimpan didlm kelas.</p>
        <h2>Magic Constant</h2>
        <p>Konstanta bawaan yg sudah dibuatkan oleh PHP.</p>
        <ul>
            <li>__LINE__</li>
            <li>__FILE__</li>
            <li>__DIR__</li>
            <li>__FUNCTION__</li>
            <li>__CLASS__</li>
            <li>__TRAIT__</li>
            <li>__METHOD__</li>
            <li>__NAMESPACE__</li>
        </ul>
        <hr class="border border-primary border-2 opacity-100">
        <pre class="text-wrap"><?php
        define("NAMA","William");
        echo NAMA . "<br>";
        const UMUR=23;
        echo UMUR . "<br>";
        class Coba{const NAMA="William Lutfi";}
        echo Coba::NAMA . "<br>";
        $obj=new Coba;
        echo $obj::NAMA . "<br>";
        echo "<hr class=\"border border-primary border-2 opacity-100\">";
        echo __LINE__ . "<br>";
        echo __FILE__ . "<br>";
        echo __DIR__ . "<br>";
        function Coba(){
            return __FUNCTION__;
        }
        echo Coba() . "<br>";
        class KelasCoba{
            public $kelas=__CLASS__;
        }
        $obj2=new KelasCoba;
        echo $obj2->kelas . "<br>";
        ?></pre>
        
    </body>
</html>