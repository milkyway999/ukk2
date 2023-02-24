<?php

$masyarakat = [
    ["nama" => "azriel",
    "umur" => "18",
    "nik" => "91631938",
    "alamat" => "kp.krajan, kec.cikampek, kab.karawang, jawa barat"],

    ["nama" => "alex",
    "umur" => "20",
    "nik" => "91631938",
    "alamat" => "kp.krajan, kec.cikampek, kab.karawang, jawa barat"],

    ["nama" => "tasya",
    "umur" => "17",
    "nik" => "91631938",
    "alamat" => "kp.krajan, kec.cikampek, kab.karawang, jawa barat"]
];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LATIHAN</title>
</head>
<body>
<?php foreach($masyarakat as $ms) : ?>
    <ul>
       
        <li><a href="latihan2.php?nama=<?= $ms["nama"]; ?>&
        umur=<?= $ms ["umur"]; ?>&
        nik=<?= $ms ["nik"];?>&
        alamat=<?= $ms ["alamat"];?>"><?= $ms["nama"]; ?></a></li>
       
    </ul>
    <?php endforeach; ?>
</body>
</html>