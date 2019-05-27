<?php
include "layout/header.php";
require 'function.php';
$slide_gbr = query("SELECT * FROM slide_s2c");
?>
<!DOCTYPE HTML>

<head>
    <link rel="stylesheet" href="css/admin.css">
</head>

<body>
    <?php
    include 'slide_chemengfair.php';
    ?>
    <div class="table-semua">
        <a class="tambah-berita-link" href="tambah/tambah_slide_chem_s2c.php">Tambah Slide</a>
        <table border="1">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Judul Utama</th>
                    <th>Sub Judul</th>
                    <th>Gambar</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $i=1; ?>
                <?php foreach($slide_gbr as $row):?>
                <tr>
                    <td><?= $i; ?></td>
                    <td><?=$row["main_judul"];?></td>
                    <td><?=$row["sub_judul"];?></td>
                    <td><img src="../upload/<?=$row["slide_gambar"]; ?>" width="50"></td>
                    <td>
                        <a href="delete/delete_slide_chem_s2c.php?id=<?=$row["id_slide"];?>"
                            onclick="return confirm('yakin?');">Delete</a>
                    </td>
                </tr>
                <?php $i++ ?>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</body>