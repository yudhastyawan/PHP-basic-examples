<?php

$mahasiswa = [["Yudha Styawan","099090989","Teknik Geofisika","yudhastyawan@yahoo.com"],
              ["Yudha Styawan","099090989","Teknik Geofisika","yudhastyawan@yahoo.com"]
             ];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach($mahasiswa as $a) :?>
    <ul>
        <?php foreach($a as $b) :?>
        <li><?= $b; ?></li>
        <?php endforeach;?>
    </ul>
    <?php endforeach;?>
</body>
</html>