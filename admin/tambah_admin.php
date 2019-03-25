<?php
include "layout/header.php";
require 'function.php';
    if(isset($_POST["tambah_admin"])){
        // cek apakah data berhasil ditambahkan atau tidak
        if(tambah_admin($_POST)>0){
            echo "
            <script>
                alert ('admin berhasil ditambahkan!');
                document.location.href ='list_admin.php'
            </script>
            ";
        }else{
            echo "
            <script>
                alert ('admin gagal ditambahkan!');
                document.location.href ='list_admin.php'
            </script>
            ";
        }
    }
?>

<form method="post" action="">
<head>
    <link href="css/tambah.css"  rel="stylesheet">
</head>
    Nama Admin : <input type="text" name="nama_admin" id="nama_admin"> <br>
    Username : <input type="text" name="user_admin" id="user_admin"> <br>
    Password :<br><input type="password" name="pass_admin" id="pass_admin" 
    style="border: 1px solid #ccc;width: 100%;padding: 12px 20px;margin: 8px 0;display: block;"> <br>
    Konfirmasi Password :<br><input type="password" name="pass_admin2" id="pass_admin2"
    style="border: 1px solid #ccc;width: 100%;padding: 12px 20px;margin: 8px 0;display: block;"> <br>
    <input type="submit" name="tambah_admin" value="tambah">
</form>