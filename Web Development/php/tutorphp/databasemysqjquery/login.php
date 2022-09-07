<?php
session_start();
require "function.php";

//cek cookie
if ( isset($_COOKIE['login']) && isset($_COOKIE['key']) ) {
    $id = $_COOKIE['login'];
    $key = $_COOKIE['key'];

    //ambil username berdasarkan id
    $result = mysqli_query($db, "SELECT Username FROM users WHERE ID = $id");
    $row = mysqli_fetch_assoc($result);

    //cek cookie dan username
    if( $key === hash('sha256', $row["Username"]) ) {
        $_SESSION['login'] = true;
    }

}

if( isset( $_SESSION["login"] ) ) {
    header('Location: index.php');
    exit;
}

if( isset( $_POST["login"] ) ) {
    $username = $_POST["Username"];
    $password = $_POST["Password"];

    $result = mysqli_query($db, "SELECT * FROM users WHERE Username = '$username'");

    //cek username
    //mysqli_num_rows(namavariabelyangberisimysqliqueryuntukmenyeleksisuatudata) digunakan untuk menampilkan banyak data yang ditemukan
    if( mysqli_num_rows( $result ) === 1 ) {
        //ambil data yang ditemukan
        $data = mysqli_fetch_assoc( $result );
        //cek password
        //syntax : password_verify(namavariabelpassword, namavariabelpassworddaridatabaseyangdienkripsi)
        //digunakan untuk memeriksa apakah password yang dimasukkan sama dengan password yang dienkripsi atau tidak
        //akan mengembalikan nilai true jika sama, mengembalikan nilai false jika berbeda.
        if( password_verify($password, $data["Password"]) ) {
            //set session (untuk penggunaan session, dapat dilihat pada folder session)
            $_SESSION["login"] = true;

            //cek remember me: implementasi cookie
            if( isset( $_POST["remember"] ) ) {
                //buat cookie
                //untuk membuat system keamanan pada cookie, lakukan hal dibawah
                setcookie( 'login', $data['ID'], time()+60 );
                setcookie( 'key', hash('sha256', $data['Username']), time()+60 );
            }
            header("Location: index.php");
            exit;
        }
    } 

    $error = true;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
</head>
<body>
    <h1>LOGIN</h1>
    <?php if( isset( $error ) ): ?>
        <p>USERNAME ATAU PASSWORD YANG ANDA MASUKKAN SALAH!</p>
    <?php endif; ?>
    <form action="" method="post">
        <ul>
            <li>
                <label for="username">USERNAME : </label>
                <input type="text" name="Username" id="username">
            </li>
            <li>
                <label for="password">PASSWORD : </label>
                <input type="password" name="Password" id="password">
            </li>
            <li>
                <!-- implementasi cookie -->
                <input type="checkbox" name="remember" id="remember">
                <label for="remember">REMEMBER ME</label>
            </li>
            <li>
                <button type="submit" name="login">LOGIN</button>
            </li>
        </ul>
    </form>
    <br>
    <p>Belum melakukan registrasi? <a href="./register.php">KLIK DISINI!</a></p>
</body>
</html>