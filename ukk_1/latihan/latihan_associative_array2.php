<?php 
$mahasiswa = [
    [
    "nama" => "azriel",
    "kelas" => "12" , 
    "jurusan" => "rekayasa perangkat lunak",
    "gambar" => "../img/coba.jpg"
    ] ,
    [
    "nama" => "udin",
    "kelas" => "12" , 
    "jurusan" => "rekayasa perangkat lunak",
    "gambar" => "../img/coba.jpg"
    ],
    [
    "nama" => "alex",
    "kelas" => "12" , 
    "jurusan" => "rekayasa perangkat lunak",
    "gambar" => "../img/welcome1.jpg"
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
    <?php foreach ($mahasiswa as $mhs) : ?>
    <ul>
        <li>
       <img src="<?= $mhs ["gambar"]; ?>" alt="">
        </li>
        <li>nama : <?= $mhs ["nama"]; ?></li>
        <li>kelas : <?= $mhs ["kelas"]; ?></li>
        <li>jurusan : <?= $mhs ["jurusan"]; ?></li>
</ul>
<?php endforeach ?>
</body>
</html>