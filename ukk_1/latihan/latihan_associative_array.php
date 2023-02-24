<?php
//arrray
//membuat array
// $hari=["senin", "selasa", true, 100];
//menampilkan array
// versi developer
// var_dump($hari);
// echo "<br>";
// print_r($hari);
//menampilkan 1 elemen pada array
// echo $hari ;
//echo hanya menampilkan 1 elemen bukan array
// echo $hari[0];
// menampilkan array menggunakan pengulangan

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .kotak {
            width : 100px;
            height : 100px;
            background-color: yellow;
            text-align : center; 
            line-height : 30px;
            margin : 3px;
            float: left;
            transition : 1.5s;
        }
        .kotak:hover{
            transform: rotate(360deg);
            border-radius: 50%;
        }
        .clear {
            clear: both;
        }
        </style>
</head>
<body>
    <?php
    $angka =  [
        [1,2,3],
        [4,5,6],
        [7,8,9]
        ]
    ?>
<?php foreach ($angka as $a) : ?>
    <?php foreach ($a as $b) : ?>
    <div class="kotak"><?= $b; ?> </div>
    <?php endforeach; ?>
    <div class="clear"></div>
<?php endforeach; ?>


</body>
</html>