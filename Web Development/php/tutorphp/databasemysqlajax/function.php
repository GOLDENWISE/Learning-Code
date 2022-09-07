<?php
$db = mysqli_connect("localhost", "root", "", "phpdasar");

function query( $query ) {
    global $db;
    $result = mysqli_query( $db, $query );
    $data = [];
    while ( $temp = mysqli_fetch_assoc( $result ) ) {
        $data[] = $temp;
    }
    return $data;
}

function addData( $data, $file ) {
    global $db;
    //tambahkan htmlspecialchars pada suatu data yang akan diinput
    //untuk menangani adanya user nakal yang ingin membuat sistem menjadi kacau dengan memasukkan suatu elemen html ke data yang diinputkan
    $Nama = htmlspecialchars($data["Nama"]);
    $NIM = htmlspecialchars($data["NIM"]);
    $Email = htmlspecialchars($data["Email"]);
    $Jurusan = htmlspecialchars($data["Jurusan"]);
    
    //upload gambar
    $gambar = upload( $file );
    if( $gambar === false ) {
        //jika return false dijalankan, program selanjutnya tidak akan dijalankan
        return false;
    }

    //tambahkan data ke database
    //syntax -> mysqli_query(variabelkoneksi, "syntax mysql yang digunakan untuk menambahkan data")

    $query = "INSERT INTO mahasiswa VALUES ( '','$Nama','$NIM','$Email','$Jurusan','$gambar' )";
    mysqli_query($db, $query);

    //memeriksa apakah ada kesalahan pada syntax atau kesalahan pengiriman error dengan mengembalikan pesan kesalahan
    return mysqli_affected_rows($db);
}

function upload ( $file ) {
    //$_FILES = variabel pada php yang berguna untuk mengelola file yang diterima saat gambar diupload
    $nameFile = $file["gambar"]["name"];
    $sizeFile = $file['gambar']['size'];
    $error = $file['gambar']['error'];
    $penyimpananSementara = $file['gambar']['tmp_name'];
    //pengecekan gambar sudah diupload atau tidak
    //jika error === 4, maka tidak ada gambar yang diupload
    if( $error === 4 ) {
        echo "<script>
                    alert('Pilih gambar terlebih dahulu');
            </script>";
        return false;
    }

    //cek apakah file yang diupload merupakan gambar atau bukan
    $ekstensiGambarValid = ["jpg", "jpeg", "png"];
    //gunakan function explode, untuk memecah suatu data menjadi array, dimulai dari ditemukannya karakter yang kita inginkan (delimiter)
    //syntax explode(delimiter, namavariabelyangmenyimpanstring)
    $ekstensiGambar = explode(".", $nameFile);
    //end(variabelbersifatarray) --> berguna untuk mengambil data pada suatu array yang index nya paling akhir
    //strtolower(string) -> berguna untuk mengubah semua data bersifat string menjadi huruf kecil 
    $ekstensiGambar = strtolower( end( $ekstensiGambar ) );
    //in_array(datayangingindicaripadaarray, variabelyangbersifatarraytempatdatatersebutingindicari); akan mengembalikan true jika ditemukan, false jika tidak ditemukan
    if( !in_array( $ekstensiGambar, $ekstensiGambarValid ) ) {
        echo "
            <script>
                alert('yang anda upload, bukan gambar');
            </script>
        ";
        return false;
    } 

    //pengecekan ukuran file yang diupload
    if ( $sizeFile > 1000000 ) {
        echo "
            <script>
                alert('gambar yang diupload terlalu besar!');
            </script>
        ";
        return false;
    }

    //karena ada kemungkinan user memiliki gambar berbeda, namun nama file sama, kita harus membuat nama file baru yang unik
    //gunakan function uniqid(); untuk membuat system melakukan generate id yang baru
    
    $nameFileBaru = uniqid();
    $nameFileBaru .= '.';
    $nameFileBaru .= $ekstensiGambar;

    //jika hal diatas telah terpenuhi, lakukan upload data 
    //syntax --> move_uploaded_file(variabelyangberisidatatempatdatadisimpansementara($_FILES["name pada tag input gambar"]["tmp_name"]), 'direktori tempat file tersebut akan disimpan atau dipindah/namafileyang akan disimpan (jika namafile tersebut mau diubah, dapat dibuat nama file barunya));
    move_uploaded_file($penyimpananSementara, 'gambar/'.$nameFileBaru);
    return $nameFileBaru;

}

function Delete($ID) {
    global $db;
    //hapus data dari database
    mysqli_query($db, "DELETE FROM mahasiswa WHERE ID = $ID");
    return mysqli_affected_rows($db);
}

function update( $data, $id, $file, $oldData ) {
    global $db;

    $Nama = htmlspecialchars($data["Nama"]);
    $NIM = htmlspecialchars($data["NIM"]);
    $Email = htmlspecialchars($data["Email"]);
    $Jurusan = htmlspecialchars($data["Jurusan"]);
    if( $file["gambar"]["error"] === 4 ) {
        $gambar = htmlspecialchars($oldData["gambar"]);
    } else {
        $gambar = upload( $file );
    }

    //update data dari database
    //syntax = "mysqli_query($db, "UPDATE mahasiswa SET data-data yang mau diubah WHERE identitas dari data yang akan diubah").
    $update = "UPDATE mahasiswa SET 
                    Nama = '$Nama',
                    NIM = '$NIM',
                    Email = '$Email',
                    Jurusan = '$Jurusan',
                    gambar = '$gambar'
               WHERE ID = $id";
    mysqli_query($db, $update);

    return mysqli_affected_rows($db);
}

function register( $data ) {
    global $db;

    //stripslashes() memungkinkan data yang diinputkan tidak ada escape character (\ atau /)
    //mysqli_real_escape_string(namavariabelkoneksidatabase, namavariabeldata) memungkinkan user untuk memasukkan suatu data terdapat tanda kutipnya
    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($db, $data["password"]);
    $confirmPassword = mysqli_real_escape_string($db, $data["confirmPassword"]);
    $email = $data["email"];

    //melakukan pengecekan apakah username telah terdaftar atau belum
    $result = mysqli_query($db, "SELECT Username FROM users WHERE Username = '$username'");
    if( mysqli_fetch_assoc( $result ) ) {
        echo "<script>alert('Username telah terdaftar'); </script>";
        return false;
    }
    //melakukan pemeriksaan apakah password yang dimasukkan sesuai dengan konfirmasinya
    if ( $password !== $confirmPassword ) {
        echo "<script>alert('Password yang dimasukkan tidak sama dengan konfirmasi');</script>";
        return false;
    }

    //enkripsi password. gunakan syntax password_hash(namavariabelyangberisidatapasswordyangingindienkripsi, PASSWORD_DEFAULT); alasan menggunakan PASSWORD_DEFAULT adalah, algoritma ini akan secara otomatis menggunakan algoritma pengamanan password terbaru
    $password = password_hash($password, PASSWORD_DEFAULT);

    //tambahkan data yang diberikan user sebagai registrasi ke database
    $query = "INSERT INTO users VALUES (
                '', 
                '$username',
                '$password',
                '$email'
                )";
    mysqli_query($db, $query);
    return mysqli_affected_rows($db);
}
?>