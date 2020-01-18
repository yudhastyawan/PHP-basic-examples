<?php
// Sintaks PHP
// Standar Output
// echo, print
// print_r khusus mencetak isi array
// var_dump melihat isi dari variabel

//var_dump("Yudha Styawan");
//echo 1212121;

// penulisan sintaks php
//1. php di dalam html
//2. html di dalam php

//variable dan tipe data
//variable
// tidak boleh diawali dengan angka, tapi boleh mengandung angka
$nama = "Yudha";
echo "Halo nama saya $nama";

//operator
//aritmatika
echo 1+1;

// penggabung string/concatenation/concat
$nama_depan = "Yudha";
$nama_belakang = "Styawan";

echo $nama_depan." ".$nama_belakang;

//assignment (penugasan)
// =, +=, -=, *=, /=, %=, .=
// operator perbandingan
//<><=>===!=
var_dump(1>5);

//identitas
//===,!==
//logika&&||!

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Belajar PHP</title>
</head>
<body>
    <h1>Halo selamat datang <?php echo $nama;?> </h1>
<!--
<?php
    echo "<h1>Halo Selamat datang Yudha<h1>"
    ?>
-->
</body>
</html>