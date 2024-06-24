<?php
$mobil = [ [
    "model" => "Toyota Supra JZA80",
    "produksi" => "jepang",
    "mesin" => "2JZ-GTE turbo",
    "kapasitas" => "3000cc",
    "gambar" => "https://upload.wikimedia.org/wikipedia/commons/thumb/7/72/1994_Toyota_Supra_Sport_Roof_in_Red%2C_front_left.jpg/220px-1994_Toyota_Supra_Sport_Roof_in_Red%2C_front_left.jpg"
],

[
    "model" => "hdajdh",
    "produksi" => "jssfjks",
    "mesin" => "fisfuisef",
    "kapasitas" => "oasfosief",
    "gambar" => "https://upload.wikimedia.org/wikipedia/commons/thumb/7/72/1994_Toyota_Supra_Sport_Roof_in_Red%2C_front_left.jpg/220px-1994_Toyota_Supra_Sport_Roof_in_Red%2C_front_left.jpg"
]

];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .kotak{
            width: 500px;
            height: 550px;
            line-height: 20px;
            background-color: black;
            color: white;
            float: left;
            margin: 0 auto;
            padding: 10px;
            border-radius: 10px;
        }

        h1{
            text-align: center;
            padding: 5px;
        }
        img{
            border-radius: 10px;
        }
    </style>
</head>
<body>

        <div class="kotak">
        <h1>CAR MODEL</h1>
        <?php foreach( $mobil as $c ):?>
            <ul>
                <img src="<?= $c["gambar"] ?>">
                <li>Model : <?= $c["model"] ?></li>
                <li>produksi: <?= $c["produksi"] ?></li>
                <li>mesin: <?= $c["mesin"] ?></li>
                <li>kapasitas: <?= $c["kapasitas"] ?></li>
            </ul>
            <?php endforeach; ?>
            </div>
    
</body>
</html>