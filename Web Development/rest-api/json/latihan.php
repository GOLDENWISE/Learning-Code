<?php 
$mahasiswa = [
   [ 
    "nama" => "Hafiz",
    "nim" => "105221026",
    "email" => "abdamadhafiz13@gmail.com"
   ],
   [ 
    "nama" => "Ahmad",
    "nim" => "105211025",
    "email" => "abdullahahmadh13@gmail.com"
    ]
];
var_dump($mahasiswa);
echo "<br>";
echo "<br>";
//membuat format suatu data menjadi json => json_encode(datayangakandiubah)
$data = json_encode($mahasiswa);
echo $data;

echo "<br>";
echo "<br>";

//contoh pengambilan data dari database, yang kemudian nantinya akan diubah atau diencode menjadi json
$dbh = new PDO('mysql:host=localhost;dbname=phpdasar', 'root', '');
$db = $dbh->prepare("SELECT * FROM mahasiswa");
$db->execute();
$mahasiswa = $db->fetchAll(PDO::FETCH_ASSOC);

$data = json_encode($mahasiswa);
echo $data;

echo "<br>";
echo "<br>";

//mengambil data dari json
$data = file_get_contents('coba.json');

//decode: mengubah format file yang diambil dari json menjadi array pada php
$mahasiswa = json_decode($data, true); //true=array, false=object
var_dump($mahasiswa);

//menyimpan data ke json
//file_put_contents('namafilejson', variabelyangtelahdiencodedenganjson);
?>
