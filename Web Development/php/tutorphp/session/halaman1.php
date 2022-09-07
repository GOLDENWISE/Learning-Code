<?php
// SESSION adalah mekanisme penyimpanan informasi kedalam variabel agar bisa digunakan dilebih dari satu halaman-->
// informasi pada session, disimpan pada server. session dan cookie memiliki kaitan yang cukup erat
// untuk menggunakan session, pastikan gunakan function session_start() terlebih dahulu untuk memulai session
session_start();
$_SESSION["nama"] = "Abdullah Ahmad Hafiz"; 
// untuk penggunaan session, dapat dilihat pada file halaman2.php
?>