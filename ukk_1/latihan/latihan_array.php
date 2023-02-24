<?php
//definisi array = pasangan antara key (index) dan value
//key-nyaa adalah index, yang dimulai dari 0
//membuat array
//cara lama
$hari = array("senin", "selasa", "rabu");
//cara baru
$bulan = ["january", "february"];

//element pada array bisa beda data
$azriel=[123, "haloo", false];

//menampilkan array
//var_dump() / print_r()
var_dump($hari);
echo "<br>";
print_r($bulan);
echo "<br>";
//menampilkan 1 element pada array
echo $azriel[0];
echo "<br>";
?>