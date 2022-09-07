<?php
session_start();
session_destroy();
//dengan menggunakan session_destroy, session yang telah dibuat sebelumnya dapat dihilangkan, sehingga, variabel yang awalnya sessionnya bisa diakses, setelah didestroy tidak bisa diakses kembali. untuk mengakses kembali session, session harus dibuat terlebih dahulu
?>