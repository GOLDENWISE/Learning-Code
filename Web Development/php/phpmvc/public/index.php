<?php
//deteksi apakah ada session yang bekerja, jika tidak, maka mulai session
if( !session_id() ) session_start();
//memanggil file bernama init.php di folder app, yang lokasinya berada diluar folder public
//init.php ini nantinya akan berguna untuk memanggil file - file yang kita butuhkan
//teknik ini dikenal dengan bootstraping (panggil satu file, maka file itu akan memanggil seluruh aplikasi MVC)
require_once '../app/init.php';

$app = new App();