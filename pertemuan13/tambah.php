<?php
require 'functions.php';
//koneksi ke DBMS
//$conn = mysqli_connect("localhost","root","","phpdasar");

// cek tombol sudah disubmit atau belum
if(isset($_POST["submit"])){
//    var_dump($_POST); 
//    var_dump($_FILES);
//    tambah($_POST);
//    die; // mematikan aksi setelahnya
//    $nrp = $_POST["nrp"];
//    $nama = $_POST["nama"];
//    $email = $_POST["email"];
//    $jurusan = $_POST["jurusan"];
//    $gambar = $_POST["gambar"];
//    
//    // query insert data
//    $query = "INSERT INTO mahasiswa
//    VALUES
//    (NULL, '$nama', '$nrp', '$email', '$jurusan', '$gambar')
//    ";
//    mysqli_query($conn, $query);
//    
//    // cek keberhasilan tambahan data
    if(tambah($_POST) > 0){
        echo "
        <script>
            alert('data berhasil ditambahkan!');
            document.location.href = 'index2.php';
        </script>
        ";
    }else{
        echo "
        <script>
            alert('data gagal ditambahkan!');
            document.location.href = 'index2.php';
        </script>
        ";
//        echo mysqli_error($conn);
    };
    
};

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tambah data mahasiswa</title>
</head>
<body>
    <h1>Tambah Data Mahasiswa</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <ul>
            <li>
               <label for="nrp">NRP: </label>
                <input type="text" name="nrp" id="nrp" required>
            </li>
<li>
    <label for="nama">nama</label>
     <input type="text" name="nama" id="nama" required>
</li>
<li>
    <label for="email">email</label>
     <input type="text" name="email" id="email" required>
</li>
<li>
    <label for="jurusan">jurusan</label>
     <input type="text" name="jurusan" id="jurusan" required>
</li>
<li>
    <label for="gambar">gambar</label>
     <input type="file" name="gambar" id="gambar">
</li>
<button type="submit" name="submit">Masukkan Data!</button>                
                
                

                
            
        </ul>
    </form>
</body>
</html>