<?php
$servername = 'localhost';
$dbname = 'pengaduan';
$username = 'root';
$password = '';

$koneksi = new PDO ("mysql:host=$servername; dbname=$dbname",$username ,$password);

if ($koneksi){
    echo "berhasil";
}

?>