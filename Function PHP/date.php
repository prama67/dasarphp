<?php
// function date 
    // echo date("l, d-M-y");

//time
//UNIX Timestamp / Epoch time
//detik yang sudah berlalu sejak 1 januari 1970
    // echo time();
    // echo date("l", time()+60*60*24*31);

//mktime
// membuat sendiri detik
// mktime(0,0,0,0,0,0);
// jam, menit, detik, bulan, tanggal, tahun

// echo date("l", mktime(0,0,0,9,3,2006));


// strtotime
// sama fungsi beda code
// echo date("l", strtotime("3 september 2006"));

?>