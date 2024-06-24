<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan1</title>

    <style>
        .warnatable{
            background-color: black;
            color: white;
        }
    </style>
</head>
<body>
    <table border="1" cellpadding="10" cellspacing="0">

<!-- membuat tablet lebih simpel -->

        <!-- <?php 
        for ($i = 1; $i <= 4; $i++) {
            echo "<tr>";
            for ($j = 1; $j <= 8; $j++) {
                echo "<td>$i , $j</td>";
            }
            echo "</tr>";
        } 
        ?> -->

<!-- membuat tablet lebih simpel -->

<!-- membuat tabel versi templet -->

        <!-- <?php for ($i = 1; $i <= 4; $i++) :?>
            <tr>
                <?php for ($j = 1; $j <= 5; $j++) :?>
                    <td><?= "$i, $j"; ?></td>
                    <?php endfor;?>
            </tr>
            <?php endfor; ?> -->

<!-- membuat tabel versi templet -->

<!-- membuat tabel bisa berwarna -->

            <!-- <?php for ($i = 1; $i <= 4; $i++) :?>
                <?php if ($i % 2 == 1 ) : ?>
            <tr class="warnatable">
                <?php else :?>
            </tr>
            <?php endif ;?>
                <?php for ($j = 1; $j <= 5; $j++) :?>
                    <td><?= "$i, $j"; ?></td>
                    <?php endfor;?>
            </tr>
            <?php endfor; ?> -->

<!-- membuat tabel bisa berwarna -->

    </table>
</body>
</html>