<?php
//cara baca function isset
// jika variable $_GET["nama"] ada/ter set, maka lakukan function header("location: latihan1.php") artinya pindahkan secara paksa atau kick ke halaman latihan1.php

//cara baca function !isset
// jika variable $_GET["nama"] tidak ada/tidak ter set, maka lakukan function header("location: latihan1.php") artinya pindahkan secara paksa atau kick ke halaman latihan1.php

if ( !isset($_GET["nama"])||
!isset($_GET["umur"])||
!isset($_GET["nik"])||
!isset($_GET["alamat"])) {
//redirect
    header("Location: latihan1.php");
    exit;
}
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
    <h1>profile detail : </h1>
    <ul>
        <li><?= $_GET["nama"]?></li>
        <li><?= $_GET["umur"]?></li>
        <li><?= $_GET["nik"]?></li>
        <li><?= $_GET["alamat"]?></li>
    </ul>
</body>
</html>