<?php
// menambhakan array dalam array
// $sekolah = [
//     ["Acyuta", "RPL", "3495985"],
//     ["Julio", "RPL", "34956432"]
// ];

// associative array
$sekolah = [
    [
    "nama" => "putu rama", 
    "jurusan" => "RPL",
    "nis" => "3495985",
    "gambar" => "IMG_0025.JPG"
    ],

[
    "nama" => "julio", 
    "jurusan" => "RPL",
    "nis" => "34956432",
    "random" => [90, 80, 75],
    "gambar" => "IMG_1774.JPG"
]

];

// echo $sekolah[1]["random"][2];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>array dalam array</title>
    
</head>

<h1> data sekolah </h1>
<?php foreach ($sekolah as $i) :?>
<ul>
    <li><img src="img/<?= $i ["gambar"] ?>" width="100px" height="100px"></li>
    <li>Nama : <?= $i["nama"] ?></li>
    <li>Jurusan : <?= $i["jurusan"] ?></li>
    <li>Nis : <?= $i["nis"] ?></li>
</ul> 
    <?php endforeach;?>

</body>
</html>
