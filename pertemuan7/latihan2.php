<?php 

// cek apakah tidak ada di $_GET
if(!isset($_GET["nama"])){
    //redirect
    header("Location: latihan1.php");
    exit;
    
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Detail Mahasiswa</title>
</head>
<body>
    <ul>
        <li><?= $_GET["nama"]; ?></li>
        <li><?= $_GET["nrp"]; ?></li>
    </ul>
</body>
</html>