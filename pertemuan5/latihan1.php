<?php
// cara lama
$hari = array("Senin", "Selasa", "Rabu");
//cara baru
$bulan = ["Januari","Februari","Maret"];
$arrl = [123,"tulisan",false];

//menampilkan array
var_dump($hari);
print_r($bulan);

//menampilkan 1 elemen;
echo $arrl[0];

//menambahkan elemen baru pada array
var_dump($hari);
$hari[] = "kamis";

var_dump($hari);

?>