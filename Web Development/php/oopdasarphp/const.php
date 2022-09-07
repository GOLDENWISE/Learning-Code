<?php
//mendefinisikan nilai const (nilai tetap atau tidak berubah)
//dengan define('namaconstanta', nilai atau data dari constanta);
define('PI', 3.14);

//untuk mengakses atau menampilkan nilai dari konstanta ini sendiri tanpa menggunakan tanda $

echo PI;
echo "<br>";

//dengan const namaconstanta = nilai dari constanta;

const E = 2.718281828;
echo E;
echo "<br>";

//perbedaan define dan const adalah, define tidak bisa digunakan didalam class. dengan kata lain harus diluar class dan berperan sebagai variabel global
//sedangkan const bisa dimasukkan ke dalam class

class Coba {
    const BYTE = 8;
}

//cara mengakses variabel constanta pada suatu class, dengan menggunakan (::)

echo Coba::BYTE." bit <br>";

//magic constant

echo __LINE__."<br>"; //variabel const __LINE__ ini akan menampilkan pada halaman atau baris variabel tersebut diakses atau digunakan
echo __FILE__."<br>"; //variabel const __FILE__ ini akan menampilkan lokasi file yang sedang digunakan berada
echo __DIR__."<br>"; //variabel const __DIR__ ini akan menampilkan lokasi folder yang sedang digunakan atau tempat file tersebut berada
function tampilkan() {
    echo __FUNCTION__."<br>"; //variabel const __FUNCTION__ ini akan menampilkan nama function tempat const ini ditampilkan
}
tampilkan();
class See {
    const SEE = __CLASS__."<br>"; //variabel const __CLASS__ ini akan menampilkan nama class tempat const ini ditampilkan
    
    public static function method() {
        echo __METHOD__."<br>"; //variabel const __METHOD__ ini akan menampilkan nama class::namamethod tempat const ini ditampilkan
    }
}
echo See::SEE;
echo See::method();
//__TRAIT__ ini akan menampilkan nama trait tempat const ini dipanggil
//__NAMESPACE__ ini akan menampilkan nama namespace tempat const ini dipanggil






?>