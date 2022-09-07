<?php
//array asosiatif : array yang indexnya bersifat string, bukan angka
//syntax -> variabelarray = ["namaIndex" => "isidata", ...];
$students = [
    ["nama" => "Abdullah", "NIM" => "105", "Jurusan" => "Ilmu Komputer", "Email" => "abd@gmail.com", "src" => "./gambar/uknown1.jpg"],
    ["nama" => "Ahmad", "NIM" => "521", "Jurusan" => "Ilmu Komputer", "Email" => "amad@gmail.com", "src" => "./gambar/unknown2.jpg"],
    ["nama" => "Hafiz", "NIM" => "026", "Jurusan" => "Ilmu Komputer", "Email" => "hafiz@gmail.com", "src" => "./gambar/unknown3.jpg"]
]
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Asosiatif</title>
    <style>
        ul li img {
            display: flex;
        }
    </style>
</head>
<body>
    <h1>DAFTAR MAHASISWA</h1>
    <!--Mencetak array asosiatif multidimensi dengan foreach-->
    <?php foreach( $students as $student ) : ?>
        <ul>
            <li><img src="<?= $student["src"]; ?>" alt=""></li>
            <li>Nama : <?= $student["nama"] ?></li>
            <li>NIM : <?= $student["NIM"] ?></li>
            <li>Jurusan : <?= $student["Jurusan"] ?></li>
            <li>Email : <?= $student["Email"] ?></li>
        </ul>
    <?php endforeach; ?>    
</body>
</html>