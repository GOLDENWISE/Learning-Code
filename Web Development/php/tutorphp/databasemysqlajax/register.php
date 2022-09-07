<?php
require 'function.php';
if( isset( $_POST["register"] ) ) {
    if( register( $_POST ) > 0 ) {
        echo "<script>
                alert('Anda telah terdaftar!');
            </script>";
    } else {
        echo mysqli_error($db);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>
</head>
<body>
    <h1>REGISTRASI</h1>
    <form action="" method="post">
        <ul>
            <li>
                <label for="email">Email : </label>
                <input type="email" id="email" name="email" required >
            </li>
            <li>
                <label for="username">UserName : </label>
                <input type="text" id="username" name="username" required>
            </li>
            <li>
                <label for="password">Password : </label>
                <input type="password" id="password" name="password" required>
            </li>
            <li>
                <label for="confirm">Confirm Password : </label>
                <input type="password" id="confirm" name="confirmPassword" required>
            </li>
            <li>
                <button type="submit" name="register">REGISTER</button>
            </li>
        </ul>
    </form>
    <br>
    <a href="./login.php">KEMBALI KEHALAMAN LOGIN</a>
</body>
</html>