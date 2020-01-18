<?php
// koneksi ke database
$conn = mysqli_connect("localhost","root","","phpdasar");

function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    };
    return $rows;
};

function tambah($data){
    global $conn;
    $nrp = htmlspecialchars($data["nrp"]);
    $nama = htmlspecialchars($data["nama"]);
    $email = htmlspecialchars($data["email"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    
//    $gambar = htmlspecialchars($data["gambar"]);
    //upload gambar
    $gambar = upload();
    if(!$gambar){
        return false;
    };
    
    // query insert data
    $query = "INSERT INTO mahasiswa
    VALUES
    (NULL, '$nama', '$nrp', '$email', '$jurusan', '$gambar')
    ";
    mysqli_query($conn, $query);
    
    return mysqli_affected_rows($conn);
    
};

function upload() {
    $namafile = $_FILES["gambar"]['name'];
    $ukuranfile = $_FILES["gambar"]['size'];
    $error = $_FILES["gambar"]['error'];
    $tmpName = $_FILES["gambar"]['tmp_name'];
    
    // cek tidak ada gambar diupload
    if($error === 4){
        echo "
        <script>
        alert('pilih gambar terlebih dahulu');
        </script>
        ";
        return false;
    };
    
    // yang boleh diupload hanya gambar
    $ekstensiGambarValid = ['jpg','jpeg','png'];
    $ekstensiGambar = strtolower(end(explode('.',$namafile)));
    if(!in_array($ekstensiGambar,$ekstensiGambarValid)){
        echo "
        <script>
        alert('yang anda upload bukan gambar');
        </script>
        ";
        return false;
    };
    
    // cek ukurannya terlalu besar
    if($ukuranfile>1000000){
        echo "
        <script>
        alert('ukuran gambar terlalu besar');
        </script>
        ";
        return false;
    };
    //generate nama gambar baru
    $namaFileBaru = uniqid().'.'.$ekstensiGambar;
    // lolos, gambar siap diupload
    move_uploaded_file($tmpName,'img/'.$namaFileBaru);
    
    return $namafile;
    
};

function hapus($id){
    global $conn;
    mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id");
    return mysqli_affected_rows($conn);
};

function ubah($data) {
    global $conn;
    $id = $data["id"];
    $nrp = htmlspecialchars($data["nrp"]);
    $nama = htmlspecialchars($data["nama"]);
    $email = htmlspecialchars($data["email"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    
    $gambarLama = htmlspecialchars($data["gambarLama"]);
    
    //cek apakah user pilih gambar baru atau tidak
    if($_FILES["gambar"]["error"] === 4){
        $gambar = $gambarLama;
    } else {
        $gambar = upload();
    }
//    $gambar = htmlspecialchars($data["gambar"]);
    
    // query insert data
    $query = "UPDATE mahasiswa SET
    nrp = '$nrp',
    nama = '$nama',
    email = '$email',
    jurusan = '$jurusan',
    gambar = '$gambar'
    WHERE id = '$id'
    ";
    mysqli_query($conn, $query);
    
    return mysqli_affected_rows($conn);
};

function cari($keyword){
    $query = "SELECT * FROM mahasiswa
    WHERE
    nama LIKE '%$keyword%' OR 
    nrp LIKE '%$keyword%' OR
    email LIKE '%$keyword%' OR
    jurusan LIKE '%$keyword%'
    ";
    return query($query);
};


?>