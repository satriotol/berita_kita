<?php
include "layout/header.php";
require 'function.php';
$subberita = query("SELECT * FROM subberita ORDER BY subberita.id_subberita DESC");
?>
<a href="tambah_subberita.php">Tambah subberita</a>
<table border="1">
    <thead>
        <tr>
            <th>No.</th>
            <th>Judul Utama</th>
            <th>Sub Judul</th>
            <th>Link</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
    <?php $i=1; ?>
    <?php foreach($subberita as $row):?>
        <tr>
            <td><?= $i; ?></td>
            <td><?=$row["judul_sub"];?></td>
            <td><?=$row["subjudul_sub"];?></td>
            <td><a href="<?=$row["link_sub"];?>">Masuk ke link</a></td>
            <td>
                <a href="edit_subberita.php?id=<?=$row["id_subberita"];?>">Edit</a>
                <a href="delete/delete_subberita.php?id=<?=$row["id_subberita"];?>"onclick="return confirm('yakin?');">Delete</a>
            </td>
        </tr>
    <?php $i++ ?>
    <?php endforeach ?>
    </tbody>
</table>
</div>