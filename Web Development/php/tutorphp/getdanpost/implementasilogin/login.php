<?php
$pesan = "Tidak error";
//cek sudah tekan submit
if( isset($_POST["submit"]) ) {
    //cek username dan password
    if( $_POST["Username"] == "admin" && $_POST["Password"] == "akusukaepep123") {
        //jika benar, ke halaman admin
        header("Location: ./admin.php");
    } else {
        //jika salah, tampilkan halaman kesalahan
        $pesan = "Error";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
    <style>
        form ul li {
            margin-top: 7px;
            display: flex;
        }
        form ul li input {
            margin-left: 5px;

        }
        h1 {
            margin-left: 120px;
        }
        h2 {
            background-color: red;
            height: 44px;
            text-align: center;
            width: 395px;
            color: white;
            line-height: 44px;
        }
    </style>
</head>
<body>
    <h1>LOGIN</h1>
    <?php if( $pesan == "Error" ) : ?>
        <h2>Password atau username anda salah</h2>
    <?php endif; ?>
    <form action="" method="post">
        <ul>
            <li>
                <label for="nama">Username : </label>
                <input type="text" id="nama" name="Username" placeholder="masukkan username">
            </li>
            <li>
                <label for="pasword">Password : </label>
                <input type="password" id="pasword" name="Password" placeholder="masukkan password"><br><br>
            </li>
            <li>
                <button type="submit" name="submit">LOGIN</button>
            </li>
        </ul>
    </form>
</body>
</html>