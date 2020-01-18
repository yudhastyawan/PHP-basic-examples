<?php
//variable scope / lingkup variabel
$x = 10;

function tampilx(){
    global $x;
    echo $x;
}

echo $x;
echo "<br>";
//superglobals
//$_GET, $_POST, $_REQUEST, $_SESSION, $_COOKIE, $_SERVER, $_ENV

//variabel superglobal milik PHP dan merupakan array associative

print_r($_GET);
echo "<br>";
echo $_SERVER["SERVER_NAME"];
echo "<br>";
// $_GET
// http://localhost/phpdasar/pertemuan7/latihan1.php?nama=yudha%20styawan -> memasukkan lewat url
//http://localhost/phpdasar/pertemuan7/latihan1.php?nama=yudha%20styawan&nrp=778787878 -> multi string
//$_GET["nama"] = "Yudha Styawan";

var_dump($_GET);

$mahasiswa = [
    [
    "nama"=>"Yudha Styawan",
    "nrp"=>"0897877",
    "email"=>"yudhastyawan@yahoo.com",
    "jurusan"=>"teknik geofisika",
    "gambar"=>"yudha.jpg"
    ],
    [
    "nama"=>"Doddy",
    "nrp"=>"0897873",
    "email"=>"doddy@yahoo.com",
    "jurusan"=>"teknik geofisika",
    "gambar"=>"doddy.jpg"
    ],
    
];

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>GET</title>
</head>
<body>
    <?php foreach($mahasiswa as $mhs) :?>
    <ul>
        <li>
            <a href="latihan2.php?nama=<?= $mhs["nama"]?>&nrp=<?= $mhs["nrp"] ?>"><?= $mhs["nama"]; ?></a>
        </li>
    </ul>
    <?php endforeach; ?>
</body>
</html>