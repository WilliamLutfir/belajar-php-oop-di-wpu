<!doctype html>
<html lang="id">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Abstract Class 1</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
        <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous" defer></script> -->
    </head>
    <body class="m-2" style="text-align: justify;">
        <h1>Abstract Class 1</h1>
        <h2>Abstract Class (1)</h2>
        <ul>
            <li>Sebuah kelas yg tdk dpt diinstansiasi (tdk bisa membuat objek dgn kelas ini), agar bisa diinstansiasi, caranya menggunakan kelas dari turunannya.</li>
            <li>Kelas 'abstrak'.</li>
            <li>Mendefinisikn interface utk kelas lain yg menjdi turunannya.</li>
            <li>Berperan sbg 'kerangka dasar' utk kelas turunannya.</li>
            <li>Memiliki minimal 1 method abstrak, dmna method  ini akan dianggap sbg interface/kerangka dari method yg akan dibuat di kelas2 turunannya.</li>
            <li>Digunakn dlm 'pewarisan'/inheritance utk 'memaksakan' implementasi method abstrak yg sama utk semua kelas turunannya.</li>
        </ul>
        <h2>Contoh Kasus</h2>
        <p><img src="gmbr/KelasBuah&Turunannya.PNG" width="450px"></p>
        <p><img src="gmbr/KelasAbstrakTidakBisaDiinstansiasi.PNG" width="450px"></p>
        <p>Jika diberikn sebuah apel, kemudian dimakan, maka rasanya adalah apel.</p>
        <p>Jika diberikan sebuah buah, tapi buah tsb tdk tahu namanya, kemudian dimakan, maka rasanya pun tdk diketahui.</p>
        <p>Jdinya kelas abstrak bukan kelas utk diinstansiasi, yg diinstansiasi adalah kelas turunannya dari kelas buah.</p>
        <p>Jika ada kasus seprti ini, ini adalah pilihan tepat utk menerapkan konsep abstract class.</p>
        <p>Jika kelas abstrak diinstansiasi, maka akan terjadi error.</p>
        <h2>Membuat Kelas Abstrak</h2>
        <p><img src="gmbr/KerangkaKelasAbstrak.PNG" width="450px"></p>
        <p>Utk membuat kelas abstrak, tinggal menggunakn keyword abstract sebelum class buah.</p>
        <p><img src="gmbr/ContohKelasAbstrak.PNG" width="450px"></p>
        <p>Keyword abstract pd method, itu artinya mempunyai method abstract, yg ditulis hanya interface/namanya saja, isi/implementasinya akan ada di kelas turunannya.</p>
        <h2>Abstract Class (2)</h2>
        <ul>
            <li>Semua kelas turunan, harus mengimplementasikn method abstrak yg ada dikelas abstraknya.</li>
            <li>Kelas abstrak boleh memiliki property/method reguler.</li>
            <li>Kelas abstrak boleh memiliki property/static method</li>
        </ul>
        <h2>Contoh Kasus Lain</h2>
        <ul>
            <li>class Mobil extends Kendaraan</li>
            <li>class Laptop extends Komputer</li>
            <li>class Email extends Komunikasi</li>
            <li>...</li>
        </ul>
        <h2>Kenapa Harus Menggunakan Kelas Abstrak</h2>
        <ul>
            <li>Merepresentasikn ide/konsep dasar yg nantinya akan diimplementasikan di kelas2 turunannya.</li>
            <li>"Composition over Inheritance".</li>
            <li>Dgn melakukan composition, merupakan salah satu cara menerapkan Polymorphism.</li>
            <li>Sentralisasi logic.</li>
            <li>Mempermudah pengerjaan tim.</li>
        </ul>
        <hr class="border border-primary border-2 opacity-100">
        <pre class="text-wrap"><?php
        
        ?></pre>
        
    </body>
</html>