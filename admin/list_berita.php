<?php
include "layout/header.php";
require 'function.php';
// pagination
// $jumlahDataPerHalaman = 2;
// $jumlahData = count(query("SELECT * FROM berita"));
// $jumlahHalaman = ceil($jumlahData / $jumlahDataPerHalaman);
// $halamanAktif = (isset($_GET["halaman"])) ? $_GET["halaman"] : 1;
// $awalData = ($jumlahDataPerHalaman * $halamanAktif) -$jumlahDataPerHalaman;
// $brt = query("SELECT kategori.*,berita.* FROM berita LEFT JOIN kategori on berita.kategori = kategori.id_kategori 
// ORDER BY berita.id DESC LIMIT $awalData,$jumlahDataPerHalaman");

//tanpa halaman
$brt = query("SELECT kategori.*,berita.* FROM berita LEFT JOIN kategori on berita.kategori = kategori.id_kategori 
ORDER BY berita.id DESC ");
?>

<head>
    <link rel="stylesheet" href="css/admin.css">
</head>
<div class="table-semua">
    <a class="tambah-berita-link" href="tambah_berita.php">Tambah Berita</a>
    <table border="1">
        <thead>
            <tr>
                <th>No.</th>
                <th>Judul</th>
                <th>Tanggal</th>
                <th>Kategori</th>
                <th>Gambar</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php foreach ($brt as $row) : ?>
            <tr>
                <td class="col-number"><?= $i; ?></td>
                <td class="col-1"><?= $row["judul"] ?></td>
                <td class="col-2"><?= $row["tanggal_berita"]; ?></td>
                <td class="col-3"><?= $row["nama_kategori"]; ?></td>
                <td class="col-4"><img src="../upload/<?= $row["gambar"]; ?>" width="50" </td>
                <td>
                    <a href="edit_berita.php?id=<?= $row["id"]; ?>">Edit</a>
                    <a href="delete/delete_berita.php?id=<?= $row["id"]; ?>" onclick="return confirm('yakin?');">Delete</a>
                </td>
            </tr>
            <?php $i++ ?>
            <?php endforeach ?>
        </tbody>
    </table>
</div> 