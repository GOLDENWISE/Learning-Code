<?php
//membuat cookie
// cookie memiliki definisi yang sama dengan session, hanya saja cookie ini informasinya disimpan pada browser / client
//     sehingga, jika session tidak bisa diakses oleh user (user tidak dapat menghapus session kecuali keluar dari browser atau masuk ke link yang terdapat session destroy)
//     cookie bisa diakses oleh user (user bisa menghapus cookie, menambahkan cookie, mengedit cookie)
//     cookie digunakan untuk 
//     mengenali user : browser dapat mengetahui user yang mengakses browser pada halaman tertentu
//     shopping cart : user tidak akan kehilangan isi dari keranjang belanjanya walaupun keluar dari laman browser
//     personalisasi : untuk mengetahui perilaku user (cookie dapat mengetahui hal apa yang diminati oleh user sebelumnya)
// untuk menggunakan cookie, kita harus menggunakan function setcookie('namacookie','valuecookie', umur cookie(optional)), diawal program
// setelah itu, variabel superglobal $_COOKIE dapat diakses
// sama seperti session, jika web direstart, cookie juga dapat hilang
// namun kita bisa mengatasi hal tersebut dengan menambahkan umur cookie
// dengan menambahkan parameter ketiga, yaitu time()+(umur cookie yang kita inginkan dalam detik)
setcookie('nama', 'Hafiz', time()+60);
?>