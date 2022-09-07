<?php
session_start();

if( !isset( $_SESSION["login"] ) ) {
    header('Location: login.php');
    exit;
}
require 'function.php';
if( isset($_POST["submit"]) ) {
    //menerima pesan kesalahan atau keberhasilan dari function
    //jika kembalian lebih besar dari 0 yaitu 1, maka berhasil
    //jika kembalian lebih kecil dari 0 yaitu -1, maka gagal
    if( addData($_POST, $_FILES) > 0 ) {
        echo "
            <script>
                alert('data berhasil ditambahkan');
                document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('data gagal ditambahkan');
                document.location.href = 'index.php';
            </script>
        ";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TAMBAH DATA</title>
</head>
<body>
    <h1>TAMBAH DATA MAHASISWA</h1>
    <a href="index.php">Kembali</a>
    <br>
    <!--enctype="multipart/form-data", digunakan untuk membuat website yang dibuat dapat mengelola file yang diupload-->
    <form method="post" action="" enctype="multipart/form-data">
        <ul>
            <li>
                <label for="Nama">Nama : </label>
                <input type="text" id="Nama" name="Nama" placeholder="Masukkan nama" required>
            </li>
            <li>
                <label for="NIM">NIM : </label>
                <input type="text" id="NIM" name="NIM" placeholder="Masukkan NIM" required>
            </li>
            <li>
                <label for="Email">Email : </label>
                <input type="email" id="Email" name="Email" placeholder="Masukkan Email" required>
            </li>
            <li>
                <label for="Jurusan">Jurusan : </label>
                <input type="text" id="Jurusan" name="Jurusan" placeholder="Masukkan Jurusan" required>
            </li>
            <li>
                <label for="Gambar">Gambar : </label>
                <!--gunakan input type file untuk membuat form menerima file yang akan diupload-->
                <input type="file" id="Gambar" name="gambar">
            </li>
            <li>
                <button type="submit" name="submit">SUBMIT</button>
            </li>
        </ul>
    </form>
</body>
</html>