<?php
require 'functions.php';
//koneksi ke DBMS
//$conn = mysqli_connect("localhost","root","","phpdasar");

//ambil data di url
$id = $_GET["id"];
// query data mahasiswa berdasarkan id
$mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];


// cek tombol sudah disubmit atau belum
if(isset($_POST["submit"])){
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
//    // cek keberhasilan ubah data
    if(ubah($_POST) > 0){
        echo "
        <script>
            alert('data berhasil diubah!');
            document.location.href = 'index2.php';
        </script>
        ";
    }else{
        echo "
        <script>
            alert('data gagal diubah!');
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
    <title>Ubah data mahasiswa</title>
</head>
<body>
    <h1>Ubah Data Mahasiswa</h1>
    <form action="" method="post" enctype="multipart/form-data">
       <input type="hidden" name="id" id="id" value="<?= $mhs["id"]; ?>">
       <input type="hidden" name="gambarLama" value="<?= $mhs["gambar"]; ?>">
        <ul>
            <li>
               <label for="nrp">NRP: </label>
                <input type="text" name="nrp" id="nrp" required value="<?= $mhs["nrp"]; ?>">
            </li>
<li>
    <label for="nama">nama</label>
     <input type="text" name="nama" id="nama" required value="<?= $mhs["nama"]; ?>">
</li>
<li>
    <label for="email">email</label>
     <input type="text" name="email" id="email" required value="<?= $mhs["email"]; ?>">
</li>
<li>
    <label for="jurusan">jurusan</label>
     <input type="text" name="jurusan" id="jurusan" required value="<?= $mhs["jurusan"]; ?>">
</li>
<li>
    <label for="gambar">gambar</label><br>
    <img src="img/<?= $mhs["gambar"]; ?>" alt="<?= $mhs["gambar"]; ?>"><br>
     <input type="file" name="gambar" id="gambar">
</li>
<button type="submit" name="submit">Ubah Data!</button>                
                
                

                
            
        </ul>
    </form>
</body>
</html>