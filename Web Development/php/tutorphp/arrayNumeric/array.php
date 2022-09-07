<?php
//cara membuat array
//cara lama
$hari = array("Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu", "Minggu");

//cara baru
$bulan = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];

//dalam php, suatu data boleh diisi oleh berbagai tipe data
$data = [11113931, "String", true, 1.1041];

//cara menampilkan array
//var_dump()
var_dump($hari);
echo "<br>";

//print_r()
print_r($bulan);
echo "<br>";

//dengan for --> gunakan function count(namavariabelarray) untuk mengetahui panjang array dari suatu variabel bertipe data array
for( $i = 0; $i < count($data); $i++ ) {
    echo "$data[$i] - ";
}
echo "<br>";

//dengan foreach( $variabelarray as $variabelbaruyangmenyimpandatatiaparraypadavariabelarray ) 
foreach( $data as $tiapdata ) {
    echo $tiapdata;
    echo " - ";
}

echo "<br>";

//menambakan data ke array
$data[] = "Data baru";
for( $i = 0; $i < count($data); $i++ ) {
    echo "$data[$i] - ";
}
echo "<br>";

//array multidimensi
$students = [
    ["Abdullah Ahmad Hafiz", 105221026, "Ilmu Komputer", "abdamadhafiz13@gmail.com"],
    ["Teman Saya", 1021414524, "Teknik Percintaan", "gwplayboybanh(emotbatu)@gmail.com"],
    ["Tukang Satir", 124497814, "Teknik Permemean", "gwanakmemeyangsukanyatir@gmail.com"],
    ["Tohny Slebew", 1242424384, "Teknik Kulkas", "p@gmail.com"]
]
?>
<!--contoh-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
    <style>
        div {
            background-color: salmon;
            text-align: center;
            width: 100px;
            height: 50px;
            line-height: 50px;
            float: left;
            margin-left: 15px;
        }
        .clear {
            clear: left;
        }
    </style>
</head>
<body>
    <?php foreach( $bulan as $b ) : ?>
        <div><?= $b; ?></div>
    <?php endforeach; ?>

    <h1><br><hr>DAFTAR MAHASISWA</h1>
    <?php foreach( $students as $student ) :  ?>
    <ul>
        <?php foreach( $student as $data ) : ?>
            <li><?= $data; ?></li>
        <?php endforeach; ?>    
    </ul>
    <?php endforeach; ?>

</body>
</html>