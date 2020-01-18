<?php
session_start();
if(!isset($_SESSION["login"])){
    header("Location: login.php");
    exit;
};

require 'functions.php';

// ambil data dari tabel mahasiswa / query
$mahasiswa = query("SELECT * FROM mahasiswa ORDER BY id ASC");

// tombol cari ditekan
if(isset($_POST["cari"])){
    $mahasiswa = cari($_POST["keyword"]);
};

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Halaman Admin</title>
    <style>
        img {
            width: 100px;
        }
        .loader {
            width: 100px;
            position: absolute;
            top: 100px;
            left: 250px;
            z-index: -999;
            display: none;
        }
    </style>
</head>
<body>
   <a href="logout.php">logout</a>
    <h1>Daftar Mahasiswa</h1>
    <a href="tambah.php">Tambah data mahasiswa</a>
    <br><br>
    <form action="" method="post">
        <input type="text" name="keyword" size="30" autofocus placeholder="masukkan keyword pencarian.." autocomplete="off" id="keyword">
        <button type="submit" name="cari" id="tombol-cari">Cari!</button>
        <img src="img/giphy.gif" alt="" class="loader">
    </form>
    <br>
    <div id="container">
    <table border="1" cellpadding="10" cellspacing="0">
        
        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>NRP</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Jurusan</th>
        </tr>
        
        <?php $i = 1 ?>
        <?php foreach($mahasiswa as $row) : ?>
        <tr>
            <td><?= $i ?></td>
            <td>
                <a href="ubah.php?id=<?= $row["id"]; ?>">ubah</a> |
                <a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('yakin?')">hapus</a> 
            </td>
            <td><img src="img/<?= $row["gambar"]; ?>" alt=<?= $row["gambar"]; ?>></td>
            <td><?= $row["nrp"]; ?></td>
            <td><?= $row["nama"]; ?></td>
            <td><?= $row["email"]; ?></td>
            <td><?= $row["jurusan"]; ?></td>
        </tr>
        <?php $i++ ?>
        <?php endforeach; ?>
        
    </table>
    </div>
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>