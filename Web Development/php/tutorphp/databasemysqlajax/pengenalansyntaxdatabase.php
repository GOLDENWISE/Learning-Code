<?php
//koneksi ke database mysql
//syntax : mysqli_connect(namahost, username, password, namadatabase);
$db = mysqli_connect("localhost", "root", "", "phpdasar");

//Ambil data table pada database
//syntax = mysqli_query(variabelyangdigunakanuntukkoneksikedatabase, syntax mysql untuk mengambil data dari tabel)
$result = mysqli_query($db, "SELECT * FROM mahasiswa");

//setelah data table diberikan pada variabel result, ambil data yang ada didalam variabel tersebut
//syntax = mysqli_fetch_row() //mengembalikan nilai array numerik
//         mysqli_fetch_assoc() //mengembalikan nilai array associatif
//         mysqli_fetch_array() //mengembalikan nilai array associatif dan array numerik
//         mysqli_fetch_object() //mengembalikan nilai object. untuk menampilkan data pada object menggunakan syntax: namavariabelobject -> namaindexobject

// $dataMahasiswa = mysqli_fetch_assoc($result);

//dengan menggunakan cara diatas, data yang diambil dari database sudah berhasil, hanya saja data yang diberikan hanya satu saja
//dan jika ingin melihat data selanjutnya, kita harus menggunakan syntax yang sama seperti diatas. 
//untuk mengatasi hal tersebut, kita dapat menggunakan loop/pengulangan, seperti dibawah



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN</title>
</head>
<body>
    <h1>DAFTAR MAHASISWA</h1>
    <table border="1" cellpadding="9", cellspacing="0">
        <tr>
            <th>#</th>
            <th>Aksi</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Jurusan</th>
            <th>Email</th>
            <th>Gambar</th>
        </tr>
        <?php $i = 1; ?>
        <?php while( $takedata = mysqli_fetch_assoc( $result ) ) : ?>
            <tr>
                <td><?= $i ?></td>
                <td><a href="#">Ubah</a> | <a href="#">Hapus</a></td>
                <td><?= $takedata["Nama"] ?></td>
                <td><?= $takedata["NIM"] ?></td>
                <td><?= $takedata["Jurusan"] ?></td>
                <td><?= $takedata["Email"] ?></td>
                <td><img src="./gambar/<?= $takedata["gambar"] ?>" alt=""></td>
                <?php $i++; ?>
            </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>