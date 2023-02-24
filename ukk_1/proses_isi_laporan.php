<?php
var_dump($_POST);

$id=rand(10,1000);

$laporan=$_POST["laporan"];
$foto=$_POST["foto"];

include("koneksi.php");

$query = $koneksi->query("INSERT INTO pengaduan(id_pengaduan,nik,isi_laporan,foto,status) VALUES('$id','32523534543543','$laporan','foto.png','0')");

if($query){
    header("Location:home_user.php");
}

?>