<?php
session_start();

if( !isset( $_SESSION["login"] ) ) {
    header('Location: login.php');
    exit;
}
require "function.php";
$db = mysqli_connect("localhost", "root", "", "phpdasar");
$id = $_GET["id"];
if ( isset( $_POST["submit"] ) ) {
    $select = "SELECT * FROM mahasiswa WHERE ID = $id";
    $query = mysqli_query($db, $select);
    $data = mysqli_fetch_assoc( $query );
    if ( update( $_POST, $id, $_FILES, $data ) > 0 ) {
        echo "
            <script>
                alert('data berhasil diubah');
                document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('data gagal diubah');
                document.location.href = 'index.php';
            </script>
        ";
    }

} else {
    $select = "SELECT * FROM mahasiswa WHERE ID = $id";
    $query = mysqli_query($db, $select);
    $data = mysqli_fetch_assoc( $query );
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UPDATE DATA</title>
</head>
<body>
<h1>UPDATE DATA MAHASISWA</h1>
    <a href="index.php">Kembali</a>
    <br>
    <form method="post" action="" enctype="multipart/form-data">
        <ul>
            <li>
                <label for="Nama">Nama : </label>
                <input type="text" id="Nama" name="Nama" placeholder="Masukkan nama" required value="<?= $data["Nama"]; ?>">
            </li>
            <li>
                <label for="NIM">NIM : </label>
                <input type="text" id="NIM" name="NIM" placeholder="Masukkan NIM" required value="<?= $data["NIM"]; ?>">
            </li>
            <li>
                <label for="Email">Email : </label>
                <input type="email" id="Email" name="Email" placeholder="Masukkan Email" required value="<?= $data["Email"]; ?>">
            </li>
            <li>
                <label for="Jurusan">Jurusan : </label>
                <input type="text" id="Jurusan" name="Jurusan" placeholder="Masukkan Jurusan" required value="<?= $data["Jurusan"]; ?>">
            </li>
            <li>
                <label for="Gambar">Gambar : </label><br>
                <img src="gambar/<?= $data["gambar"]; ?>" alt="gambar"><br>
                <input type="file" id="Gambar" name="gambar" placeholder="Masukkan Gambar"><br>
            </li>
            <br>
            <li>
                <button type="submit" name="submit">UPDATE</button>
            </li>
        </ul>
    </form>
</body>
</html>