<?php
//cek apakah ada data pada $_GET. tujuannya untuk mengatasi adanya user nakal yang masuk ke url getdanpost2.php tidak melalui link di getdanpost.php
if( !isset($_GET["nama"]) || !isset($_GET["NIM"]) || !isset($_GET["Jurusan"]) || !isset($_GET["Email"]) || !isset($_GET["gambar"])) {
    //redirect: membuat user untuk kembali ke halaman sebelumnya. syntax seperti dibawah
    header("Location: ./getdanpost.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Mahasiswa</title>
</head>
<body>
    <ul>
        <li><img src=<?= $_GET["gambar"]; ?> alt=""></li>
        <li>Nama: <?= $_GET["nama"]; ?></li>
        <li>NIM: <?= $_GET["NIM"]; ?></li>
        <li>Jurusan: <?= $_GET["Jurusan"]; ?></li>
        <li>Email: <?= $_GET["Email"]; ?></li>
    </ul>
    <a href="./getdanpost.php">Kembali ke daftar Mahasiswa</a>
</body>
</html>