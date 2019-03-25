<?php
include "layout/header.php";
require 'function.php';
if(isset($_POST["submit"])){
    // cek apakah data berhasil ditambahkan atau tidak
    if(tambah($_POST)>0){
        echo "
        <script>
            alert ('data berhasil ditambahkan!');
            document.location.href ='list_berita.php'
        </script>
        ";
    }else{
        echo "
        <script>
            alert ('data gagal ditambahkan!');
            document.location.href ='list_berita.php'
        </script>
        ";
    }
}
//menampilkan kategori
$query = "SELECT * FROM kategori order by nama_kategori ASC";
$result1 = mysqli_query($conn,$query);

?>
<head>
    <link href="css/tambah.css"  rel="stylesheet">
    <script type="text/javascript" src="ckeditor/ckeditor.js"></script>
    <link rel="stylesheet" type="text/css" href="css/ckeditor.css">
</head>
<div class="container">
<form id="contact" action="" method="post" enctype="multipart/form-data" onsubmit='addNewLines();'>
    <h1>FORM</h1>
    <h1>TAMBAH BERITA</h1>
    <div>
        <form action="" method="post" enctype="multipart/form-data">
            </ul>
            <label for="judul">Judul</label>
                <input type="text" id="judul" name="judul" placeholder="Your judul..">
            <label for="tanggal_berita">Tanggal</label><br>
                <input type="date" id="tanggal_berita" name="tanggal_berita" placeholder="Your Tanggal.." 
                style="border: 1px solid #ccc;width: 100%;padding: 12px 20px;margin: 8px 0;display: block;"> <br>
            <label for="kategori">Kategori</label>
            <br><select id="kategori" name="kategori">
                            <option value="">Pilih Kategori</option>
                            <?php while($row1 = mysqli_fetch_array($result1)):;?>
                            <option value="<?php echo $row1[0];?>"><?php echo $row1[1];?></option>
                            <?php endwhile;?>
                        </select>
            <label for="isi">Isi</label> <br>
                <!-- <textarea placeholder="Masukkan Isi Berita" tabindex="5" id="isi" name="isi" 
                required style="border: 1px solid #ccc;width: 100%;padding: 12px 20px;margin: 8px 0;display: block; height: 300px;"></textarea> <br> -->
                <textarea class="ckeditor" id="isi" name="isi" required></textarea>
            <label for="gambar">Gambar</label> <br>
                <input type="file" id="gambar" name="gambar">
            <input type="submit"name="submit" value="Tambah Data!">
        </form>
    </div>
</form>
</div>