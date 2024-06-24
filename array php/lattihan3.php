<?php
// menambhakan array dalam array
$sekolah = [
    ["Acyuta", "RPL", "3495985"],
    ["Julio", "RPL", "34956432"]
];
$angka = [
    [1,2,3],
    [4,5,6],
    [7,8,9]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>array dalam array</title>
    <style>
        .kotak{
            width: 30px;
            height: 30px;
            line-height: 30px;
            text-align: center;
            float: left;
            background-color: black;
            color: white;
            margin: 5px;
        }
    </style>
</head>

<h1> data sekolah </h1>
<?php foreach ($sekolah as $i) :?>
<ul>
    <li><?= $i[0] ?></li>
    <li><?= $i[1] ?></li>
    <li><?= $i[2] ?></li>
</ul> 
    <?php endforeach;?>

    <?php foreach( $angka as  $k ) : ?>
        <?php foreach( $k as  $gui ) : ?>
    <div class="kotak"><?= $gui ?></div>
    <?php endforeach; ?>
    <?php endforeach; ?>
</body>
</html>

<?php
// untuk mencari nilai array satu persatu
$angka = [
    [1,2,3],
    [4,5,6],
    [7,8,9]
];

echo "<br>","<br>","<br>","<br>";
echo $angka [1] [0];
?>