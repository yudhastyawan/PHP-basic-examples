<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>POST</title>
</head>
<body>
   <?php if(isset($_POST["submit"])): ?>
   <h1><?= $_POST["nama"]; ?></h1>
   <?php endif; ?>
<!--    <form action="latihan4.php" method="post">-->
    <form action="" method="post">
<!--      kalau actionnya kosong maka data akan dikirimkan ke diri sendiri-->
<!--      sedangkan jika tidak ada method maka secara default itu get-->
      <label for="username">Masukkan Nama:</label>
        <input type="text" name="nama" id="username">
        <br>
        <button type="submit" name="submit">Kirim!</button>
    </form>
</body>
</html>