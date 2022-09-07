<?php
//request method: get dan post
//pada php, jika kita mendeklarasikan suatu variabel diluar function, variabel tersebut tidak dapat diakses oleh function
//namun, kita bisa membuat function untuk mengakses variabel diluar function dengan menggunakan syntax 'global $namavariabelluarfunction'
//contoh
$x = 10;
function cetakGlobal( ) {
    global $x;
    echo $x;
}
//Superglobals: variabel yang dimiliki oleh php, yang bisa diakses dimanapun (didalam halaman php kita)
//variabel superglobals -> $_GET, $_POST, $_REQUEST, $_SESSION, $_COOKIE, $_SERVER, $_ENV
//semua variabel superglobal ini memiliki tipe array asosiatif
//$_GET. untuk mengisi data ke variabel $_GET, dapat dilakukan dengan cara memasukkan syntax berikut pada url web kita
//.../namaweb?namaindexarrayasosiatif="isidata"&namaindexarrayasosiatifselanjutnya="isidata"&...dan begitu seterusnya

//jika $_GET, data dikirim dengan menggunakan url, $_POST ini datanya dikirim melalui form


var_dump($_GET);
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
    <title>Get dan Post</title>
</head>
<body>
    <p><?= cetakGlobal(); ?></p>
    <h1>DAFTAR MAHASISWA</h1>
    <!--Contoh penerapan $_GET-->
    <ul>
    <?php foreach( $students as $student ) : ?>
        <li><a 
        href='./getdanpost2.php?nama=<?= $student["nama"];?>&NIM=<?= $student["NIM"]?>&Jurusan=<?= $student["Jurusan"]?>&Email=<?= $student["Email"]?>&gambar=<?= $student["src"]?>'><?= $student["nama"] ?></a></li>
    <?php endforeach; ?>
    </ul>
    <p></p>

    <!--$_POST, dapat dilihat pada file getdanpost3.php-->
    <!--pada bagian tag form, jika method tidak diisi, secara default akan menggunakan method="get", jika action tidak diisi, secara default data dikirim ke link pada form itu sendiri-->
    <h1>POST FORM</h1>
    <form method="post" action="./getdanpost3.php">
        Masukkan Nama : 
        <input type="text" name="Nama">
        <button type="submit">Kirim</button>
    </form>
</body>
</html>