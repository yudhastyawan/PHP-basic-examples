<?php
// date untuk menampilkan tanggal dengan format tertentu
//echo date("l,d-M-Y"); // Friday,17-Jan-2020

//time
// UNIX timestamp / Epoch time
// detik yang sudah berlalu sejak 1 januari 1970
//echo time();
//echo date("l",time()-60*60*24*100);
//mk time -> membuat sendiri detik
//mktime() -> parameternya ada 6
//jam, menit, detik, bulan, tanggal, tahun
//echo date("l",mktime(0,0,0,2,26,1997));
//strtotime format tanggal ke time
echo date("l", strtotime("02 feb 1997"));
//string
//strlen()
//strcmp() compare string
//explode() pecah string
//htmlspecialchars()

//utility
//var_dump()
//isset() -> boolean -> udah pernah dibuat atau belum
//empty()
//die() memberhentikan program
//sleep()
?>