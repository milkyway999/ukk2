<?php
// date untuk menampilkan tanggal dengan format tertentu
//   echo date("l,d-M-Y");
//   time
// unix timestamp / epoch time
// detik yang sudah berlalu sejak 1 januari 1970
echo time();
echo "<br>";
echo mktime(0,0,0,11,14,2004);
echo "<br>";

echo date("l, d-M-Y", time()- mktime(0,0,0,1,1,1970));
// mk time
// membuat sendiri detik
// mktime(0,0,0,0,0,0)
//jam, menit, detik, bulan, tanggal, tahun

// echo date("l",mktime(0,0,0,11,14,2004)); HASILNYA ADALAH DETIK YANG TELAH BERLALU SEJAK TAHUN 1970 DI TANGGAL 14 NOVEMBER 2004

// echo date("l, d-M-Y");
echo "<br>";
echo mktime(0,0,0,2,8,2023);
?>