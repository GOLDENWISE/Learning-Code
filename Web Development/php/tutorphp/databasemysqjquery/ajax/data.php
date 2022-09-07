<?php
require "../function.php";
$keyword = $_GET["pencarian"];
$students = query("SELECT * FROM mahasiswa WHERE 
                    Nama LIKE '%$keyword%' OR
                    NIM Like '%$keyword%' OR
                    Email Like '%$keyword%' OR
                    Jurusan Like '%$keyword%'
");
?>

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