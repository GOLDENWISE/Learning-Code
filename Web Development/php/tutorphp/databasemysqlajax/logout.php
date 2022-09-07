<?php
//untuk membuat fitur logout, kita dapat menggunakan session_destroy()
session_start();
$_SESSION = [];
session_unset();
session_destroy();

//hapus cookie
setcookie('login', '', time()-3600);
setcookie('key', '', time()-3600);

header("Location: login.php");
exit;
?>