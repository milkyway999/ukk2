<?php
function salam($waktu , $nama){
    return "halo selamat $waktu, $nama!";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan function</title>
</head>
<body>
    
<h1><?php echo salam("siang", "azriel");?></h1>

</body>
</html>
<!-- logic, ketika function salam dipanggil, maka function salam akan mengembalikan nilai, nilainya adalah "halo selamat $waktu,$nama!" namun nilai tersebut masih disimpan didalam function salam (belum ditampilkan), jika ingin menampilkannya maka kita harus ketik echo -->