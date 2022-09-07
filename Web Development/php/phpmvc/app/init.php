<?php
//didalam file ini akan memanggil file yang dibutuhkan untuk aplikasi MVC. 
// dimana yang diperlukan disini adalah App.php (berisi class App) dan Controller.php (berisi class Controller)
// 2 class tersebut merupakan 2 class utama pembentuk mvc nya

require_once 'core/App.php';
require_once 'core/Controller.php';
require_once 'core/Database.php';
require_once 'core/Flasher.php';
require_once 'config/config.php';

//file Controller.php ini merupakan class Controller yang merupakan class utama, 
//sedangkan isi dari folder controllers berisi class - class yang akan extend (inheritance) ke class Controller utama ini
