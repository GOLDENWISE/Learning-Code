<?php
//autoloading: proses pemanggilan class dalam file tanpa menggunakan require
//dalam pengimplementasianya, 1 class disimpan dalam 1 file
//untuk syntax dapat dilihat dibawah

spl_autoload_register(function( $class ) {

    //pastikan isi require ini merupakan folder yang merupakan tempat file class berada
    //dan juga, pastikan nama setiap file tersebut sama dengan nama classnya dengan format .php

    //pecah isi string class, dengan dibagi dari tanda \
    //cth: App\Produk\User => ["App", "Produk", "User"]
    $class = explode('\\', $class);

    //setelah dipecah, ambil data terakhir, yang merupakan nama file dari class
    //cth: ["App", "Produk", "User"] => User
    $class = end($class);
    require_once 'App/Produk/'. $class . '.php';
});

spl_autoload_register(function( $class ) {
    $class = explode('\\', $class);
    $class = end($class);
    require_once 'App/Service/'. $class .'.php';
});
//dan untuk pengimplementasiannya dapat dilihat pada file - file dalam folder ini

$komik = new Komik("One Piece", "Eichiro Oda", "Shonen Jump", 100000, 1057);
$game = new Game("Genshin Impact", "Hugh Tsai", "Hoyoverse", 0, 3);

$print = new CetakProduk();
$print->tambahProduk( $komik );
$print->tambahProduk( $game );
echo $print->tampilkanData();
echo "<hr>";

//memberikan alias
//gunakan syntax use pada suatu namespace
//kemudian gunakan as untuk menjadikan namespace itu terlihat lebih spesifik
use App\Produk\User as Product;
use App\Service\User as Service;

new Product();
echo "<br>";
new Service();

// namespace: cara yang kita gunakan untuk mengelompokkan program kedalam sebuah package tersendiri
// dikenal sebagai teknik encapsulasi
// pada dasarnya, php tidak mengizinkan kita memiliki 2 class yang memiliki nama yang sama
// namun, dengan namespace kita bisa membuat sebuah class dengan nama yang sama, program dapat mengidentifikasi bahwa 2 class tersebut berbeda
// untuk pengimplementasian, dapat dilihat pada folder Produk dan Service. tepatnya file User.php
// aturan penulisan namespace: namespace Vendor\Namespace\SubNamespace;
//ket:
// Vendor: nama pembuat atau nama aplikasi
// Namespace: Nama namespace
// SubNamespace: Nama subnamespace