<?php
//Built-in function: function yang telah disediakan oleh php
//contoh built-in function date
echo date("l")." "; //parameter l, untuk melihat hari apa saat ini
echo date("d")." "; //parameter d, untuk melihat tanggal berapa saat ini
echo date("M")." "; //parameter M, untuk melihat bulan berapa saat ini dengan format 3 huruf depan suatu bulan (januari = jan, ..., desember = des)
echo date("m")." "; //parameter m, untuk melihat bulan berapa saat ini dengan format angka
echo date("Y")." "; //parameter Y, untuk melihat tahun saat ini dengan format ribuan
echo date("y")."<br>"; //parameter y, untuk melihat tahun saat ini dengan format puluhan (2022 = 22, 2001 = 01)
echo date("l, d-M-Y"); //jika digabungkan seperti disamping, dapat menampilkan dengan rinci waktu saat ini
//untuk lebih lengkapnya, dapat dilihat pada dokumentasi di web php.net
echo "<br>";
//contoh built-in function time
echo time()."<br>"; //menampilkan EPOCH Time atau UNIX Timestamp. dengan kata lain, detik sejak tanggal 1 Januari 1970 / waktu yang disepakati pada dunia IT
$hari = 6;
echo date("l d M Y", time()+60*60*24*$hari)."<br>"; //menampilkan hari, tanggal, bulan dan tahun apa untuk 2 hari kemudian (60*60*24*$hari = hari dalam detik)

//contoh built-in function mktime(jam, menit, detik, bulan, tanggal, tahun); digunakan untuk membuat waktu yang kita inginkan sejak dimulainya EPOCH Time
echo mktime(0,0,0,1,13,2004)."<br>";//detik yang berlalu sejak EPOCH Time/1 Januari 1970 hingga tanggal 13 Januari 2004
//dengan format diatas, kita dapat mengetahui, hari apa pada saat waktu tersebut, contoh seperti dibawah
echo date("l", mktime(0,0,0,1,13,2004))."<br>";

//strtotime, hampir sama seperti mktime. hanya saja, parameter yang dikirim dengan menggunakan format string
echo strtotime("13 Jan 2004")."<br>";
echo date("l", strtotime("13 Jan 2004"))."<br>";

//strlen(). built-in function yang digunakan untuk mengetahui panjang suatu string (termasuk spasi)
echo strlen("Hafiz")."<br>";
$berisi = "adaIsi";
$kosong = "";
//strcmp(). built-in function yang digunakan untuk membandingkan dua string
//explode(). memecah string menjadi array
//htmlspecialchars(). function khusus untuk menjaga website kita dari hacker contohnya
//isset(). function untuk memeriksa apakah suatu variabel sudah pernah dibikin atau tidak
//empty(). function yang digunakan untuk memeriksa apakah suatu variabel kosong atau berisi
//die(). function digunakan untuk memberhentikan program
//sleep(). function yang digunakan untuk memberhentikan program sementara
if(isset($kosong)) {
    echo "variabel ini sudah dibikin <br>";
} else {
    echo "variabel ini tidak pernah dibikin <br>";
}

if(empty($kosong)) {
    echo "kosong<br>";
} else {
    echo "ada isinya <br>";
}
sleep(1);
echo "Sudah bangun selama 1 detik <br>";
//User-defined function: function yang dibuat oleh user
//mendefinisikan function dengan return
//dengan parameter
function salam( $nama ) {
    return "Selamat datang, $nama!";
}
//tanpa parameter
function penutup( ) {
    return "dadah";
}

//tanpa return
//tanpa parameter
function pertengahan() {
    echo "Ga ada kembalian";
}
//dengan parameter
//pada php, jika suatu function membutuhkan 2 parameter, maka parameter yang dikirim harus 2 parameter, atau ga boleh kurang
//jika kita ingin suatu function tidak membutuhkan 2 parameter, namun user ttp bisa memberikan sebuah parameter, kita dapat memberikan nilai default pada parameter tersebut
//contohnya seperti function dibawah
function pertengahanAkhir($akhir = "end") {
    echo $akhir;
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan function</title>
</head>
<body>
    <h1><?= salam("Hafiz"); ?></h1>
    <h3><?php pertengahan(); ?></h3>
    <h1><?php pertengahanAkhir("dah lah -_"); ?></h1>
    <footer><?= penutup(); ?></footer>
</body>
</html>



<?php
die();
echo "Ini program terakhir, ga bakal dieksekusi, udh ajal :)";
?>