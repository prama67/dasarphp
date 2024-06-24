<?php
// array 
// variabel yangg dapat memiliki banyakk nilai
// element pada array boleh memiliki tipe data yang berbeda
// pasangan antara key dan value
// key-nya adalah index 


// membuat array
// cara lama
$hari = array("senin","selasa","rabu");
//cara baru
$bulan = ["januari","februari","maret"];
$random = ["123","gue rama",false];

// menampilkan array
// var_dump / print_r()
// var_dump($hari);
// echo "<br><br>";
// print_r($bulan);
// echo "<br><br>";

// menampilkan 1 elemen para array
// echo $random[0];
// echo "<br><br>";
// echo $bulan[1];

// menambahkan elemen 1 dalam array
echo "<br><br>";
$hari [] = "kamis";
var_dump($hari);
?>