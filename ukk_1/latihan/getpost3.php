<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>detail mahasiswa</title>
</head>
<body>
    <ul>
        <li><img src="../img/coba.jpg"></li>
        <li><?= $_GET["nama"]; ?></li>
        <li><?= $_GET["kelas"]; ?></li>
        <li><?= $_GET["jurusan"]; ?></li>
        <li><?= $_GET["gambar"]; ?></li>
    </ul>

    <a href="getpost2.php">kembali lagi ke halaman mahasiswa</a>
</body>
</html>