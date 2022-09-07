<?php
session_start();

if( !isset( $_SESSION["login"] ) ) {
    header('Location: login.php');
    exit;
}
//untuk melihat cara melakukan CRUD dengan database, lihat pada file function.php atau pengenalansyntaxdatabase.php
//mengimport data pada file yang berisi function / variabel / sejenisnya yang khusus kita buat. gunakan syntax require namafile.php;
require 'function.php';
$students;

//pagination : memberikan limit pada data yang diberikan, sehingga, suatu data yang diberikan itu lebih banyak, dapat diberikan penghalaman
//semisal halaman 1 menampilkan 5 data, halaman selanjutnya juga
$jumlahDataPerHalaman = 3;
//tentukan jumlahdatakeseluruhan
$totalData = count(query("SELECT * FROM mahasiswa"));
//tentukan jumlah halaman berdasarkan limit yang diberikan
//round(): membulatkan bilangan ke decimal terdekat 
//floor(): membulatkan bilangan decimal ke bawah
//ceil(): membulatkan bilangan decimal ke atas
$totalHalaman = ceil($totalData / $jumlahDataPerHalaman);
$halamanAktif = isset( $_GET["page"] ) ? $_GET["page"] : 1;
$awalData = $jumlahDataPerHalaman * ( $halamanAktif - 1 );


if( isset($_POST["submit"]) ) {
    if( isset( $_POST["sortby"] ) ) {
        if( $_POST["sortby"] === "Mahasiswa terbaru" ) {
            //pencarian seluruh data dengan id dari yang paling besar ke paling kecil
            $students = query("SELECT * FROM mahasiswa ORDER BY ID DESC");
        } else {
            //pencarian seluruh data dengan id dari yang paling kecil ke paling besar
            $students = query("SELECT * FROM mahasiswa ORDER BY ID ASC");
        }
    } else {
        $search = $_POST["pencarian"];
        $request = $_POST["requestby"];
        //pencarian data yang tidak spesifik "nama depannya atau huruf depannya sama persis"
        $students = query("SELECT * FROM mahasiswa WHERE $request LIKE '$search%'");
    }
} else {
    //jika kita ingin menambahkan batas pada pengambilan data, tambahkan keyword LIMIT dimulaidariindexkeberapa, diambilberapadata setelah FROM namatabel
    $students = query("SELECT * FROM mahasiswa LIMIT $awalData, $jumlahDataPerHalaman");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN</title>
    <style>
        //untuk mengatur tampilan file pdf hasil print dari web, kita dapat menggunakan syntax seperti dibawah ini
        @media print {
            a {
                display: none;
            }
        }
    </style>
</head>
<body>
    <h1>DAFTAR MAHASISWA</h1>
    <a href="logout.php">LOGOUT</a>
    <a href="tambah.php">TAMBAH DATA MAHASISWA</a>
    <br><br>
    <form action="" method="post">
        <label for="request">Pencarian berdasarkan : </label>
        <br>
        <select name="requestby" id="request">
            <option>Nama</option>
            <option>NIM</option>
            <option>Jurusan</option>
            <option>Email</option>
        </select>
        <br>
        <label for="pencarian">Data yang ingin dicari : </label>
        <br>
        <input type="text" name="pencarian" id="pencarian" placeholder="masukkan data yang ingin dicari">
        <button type="submit" name="submit" id="cari">SEARCH</button>
    </form>
    <br>
    <form action="" method="post">
        <label for="sort">URUTKAN DATA DARI: </label>
        <br>
        <select name="sortby" id="sort">
            <option>Mahasiswa terbaru</option>
            <option>Mahasiswa terlama</option>
        </select>
        <button type="submit" name="submit">SUBMIT</button>
    </form>
    <br>
    <!--Navigasi Page-->
    <?php if( !isset($_POST['submit']) ) :?>
        <?php if($halamanAktif > 1) : ?>
            <a href="./index.php?page=<?= $halamanAktif - 1; ?>"> &laquo; </a>
        <?php endif; ?>
        <?php for($i = 1; $i <= $totalHalaman; $i++ ) : ?>
            <?php if( $i == $halamanAktif ) : ?>
                <a href="./index.php?page=<?= $i; ?>" style="font-weight: bold; color: red;"><?= $i; ?></a>
            <?php else : ?>
                <a href="./index.php?page=<?= $i; ?>"><?= $i; ?></a>
            <?php endif; ?>
        <?php endfor; ?>
        <?php if( $halamanAktif < $totalHalaman ) : ?>
            <a href="./index.php?page=<?= $halamanAktif + 1; ?>"> &raquo; </a>
        <?php endif; ?>
    <?php endif;?>
    <div id="container">
        <table border="1" cellpadding="9", cellspacing="0">
            <tr>
                <th>#</th>
                <th>Aksi</th>
                <th>Nama</th>
                <th>NIM</th>
                <th>Jurusan</th>
                <th>Email</th>
                <th>Gambar</th>
            </tr>
            <?php $i = 1; ?>
            <?php foreach( $students as $student ) : ?>
                <tr>
                    <td><?= $i ?></td>
                    <td><a href="./update.php?id=<?= $student["ID"]; ?>">Ubah</a> | <a href="./hapus.php?id=<?= $student["ID"]; ?>" onclick="return confirm('Yakin?');">Hapus</a></td>
                    <td><?= $student["Nama"] ?></td>
                    <td><?= $student["NIM"] ?></td>
                    <td><?= $student["Jurusan"] ?></td>
                    <td><?= $student["Email"] ?></td>
                    <td><img src="./gambar/<?= $student["gambar"] ?>" alt=""></td>
                    <?php $i++; ?>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
    <script src="jquery-3.6.0.min.js"></script>
    <script src="script.js"></script>
</body>
</html>