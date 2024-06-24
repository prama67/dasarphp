<?php
//pengulangan pada array
// for / foreach
$angka = [3,2,15,20,11,77,89,98];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>html</title>

    <style>
        .kotak{
            width: 50px;
            height: 50px;
            background-color: black;
            text-align: center;
            line-height: 50px;
            color: white;
            margin: 5px;
            float: left;
            transition: 1s;
        }

        .kotak:hover{
            transform: rotate(360deg);
            border-radius: 50%;
            background-color: red;
            color: white;
        }

        .clear { clear: both;}
    </style>
</head>
<body>

<!-- fungsi { count } itu mencari data di php 
 yang di tambahkan -->
<!-- ini ada 3 cara nya untuk pengulangan menggunakan array -->
    <?php for ($i = 0; $i < 8; $i++) {?>
    <div class="kotak"><?php echo $angka[$i] ?></div>
<?php }?>

<div class="clear"></div>

<?php foreach($angka as $k) {?>
    <div class="kotak"><?php echo $k;?></div>
<?php }?>

<div class="clear"></div>

<?php foreach( $angka as  $k ) : ?>
    <div class="kotak"><?= $k ?></div>
    <?php endforeach; ?>




</body>
</html>
