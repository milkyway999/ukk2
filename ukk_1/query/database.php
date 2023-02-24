<?php
//koneksi database
$conn = mysqli_connect("localhost","root","", "pengaduan_masyarakat");

//ambil data dari tabel masyarakat/query data mahasiswa
$result = mysqli_query($conn, "SELECT * FROM pengaduan_masyarakat");
var_dump($result);

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
    
</body>
</html>