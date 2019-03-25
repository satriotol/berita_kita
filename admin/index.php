<?php
include "layout/header.php";
require 'function.php';
$index = query("SELECT kategori.*,berita.* FROM berita LEFT JOIN kategori on berita.kategori = kategori.id_kategori 
ORDER BY berita.id DESC");
?>
<html>
    <head>
        <h1>Dashdboard</h1>
        <h2>Selamat datang,"nama admin"</h2>
    </head>
</html>