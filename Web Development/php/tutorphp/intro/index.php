<?php
    //syntax print text ke web
    print "Ini print ";
    echo "Hello World!";
    print_r("Ini print_r ");//bisa digunakan untuk mencetak string dan array
    var_dump("ini menggunakan var_dump."); //var_dump tidak hanya menampilkan data pada suatu variabel, namun juga menampilkan tipe data dari variabel dan panjang dari data tersebut

    //print angka
    echo 123;

    //print boolean
    echo true; //mencetak angka 1
    echo false; //tidak menghasilkan atau mencetak apapun

    //deklarasi variabel
    $nama = "Hafiz";

    //mencetak variabel didalam string
    echo "halo, nama saya $nama"; //hal ini hanya bisa dilakukan dengan menggunakan tanda petik 2 ("")

    //operator aritmatika
    echo "<br>";
    echo 1 + 1; 
    echo "<br>";
    echo 2 - 1;
    echo "<br>";
    echo 1 * 2;
    echo "<br>";
    echo 2 / 1;
    echo "<br>";
    echo 3 % 2;
    echo "<br>";

    //operator konkatenasi (.)
    $nama_depan = "Abdullah";
    $nama_tengah = "Ahmad";
    $nama_belakang = "Hafiz";
    echo $nama_depan." ".$nama_tengah." ".$nama_belakang;

    
?>
<!--penulisan syntax php dalam html-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intro</title>
</head>
<body>
    <!--mencetak data pada variabel-->
    <h1>Halo <?php echo $nama; ?></h1>
    <p><?php echo "Ini adalah paragraf"; ?></p>
    <!--HTML didalam PHP-->
    <?php echo "<h2>Halo, ini HTML didalam PHP</h2>"; ?>
</body>
</html>
