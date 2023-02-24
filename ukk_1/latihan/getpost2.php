<?php
//metode request get yaitu menginput sebuah variable dan nilai melalui URL
//lalu hasil inputnya disimpan didalam variable superglobals $_GET

$mahasiswa = [
    [
    "nama" => "azriel",
    "kelas" => "12" , 
    "jurusan" => "rekayasa perangkat lunak",
    "gambar" => "../img/coba.jpg"
    ] ,
    [
    "nama" => "udin",
    "kelas" => "10" , 
    "jurusan" => "teknik bisnis sepeda motor",
    "gambar" => "../img/coba.jpg"
    ],
    [
    "nama" => "alex",
    "kelas" => "11" , 
    "jurusan" => "teknik komputer dan jaringan",
    "gambar" => "../img/coba.jpg"
    ]
    ];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>daftar mahasiswa</h1>
   
    <ul>
        <?php foreach ($mahasiswa as $mhs) : ?>
        <li>
            <a href="getpost3.php?
            nama=<?= $mhs["nama"]; ?>
            &kelas=<?= $mhs["kelas"]; ?>
            &jurusan=<?= $mhs["jurusan"]; ?>
            &gambar=<?= $mhs["gambar"]; ?>">
            <?= $mhs["nama"]; ?> </a>
        </li>
        <?php endforeach; ?>
    </ul>
   
   
</body>
</html>