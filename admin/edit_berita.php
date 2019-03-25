<?php
    include "layout/header.php";
    require 'function.php';
    $id = $_GET["id"];
    $brt = query("SELECT kategori.*,berita.* FROM berita LEFT JOIN kategori on berita.kategori = kategori.id_kategori  WHERE berita.id = $id")[0];
    if(isset($_POST["submit"])){
        // cek apakah data berhasil ditambahkan atau tidak
        if(ubah($_POST)>0){
            echo "
            <script>
                alert ('data berhasil diubah!');
                document.location.href ='list_berita.php'
            </script>
            ";
        }else{
            echo "
            <script>
                alert ('data gagal diubah!');
                document.location.href ='list_berita.php'
            </script>
            ";
        }
    } 
    //menampilkan kategori
    $query = "SELECT * FROM kategori order by nama_kategori ASC";
    $result1 = mysqli_query($conn,$query);
?>
<html>
    <head>
        <link rel="stylesheet" href="css/edit_berita.css">
        <meta name="viewport" content="user-scalable=no" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <script type="text/javascript" src="ckeditor/ckeditor.js"></script>
        <link rel="stylesheet" type="text/css" href="css/ckeditor.css">
    </head>
<form action="" method="post" enctype="multipart/form-data">
    <ul>
        <input type="hidden" name="id" value="<?= $brt["id"];?>">
        <input type="hidden" name="gambarLama" value="<?= $brt["gambar"];?>">
        <label for="judul">Judul</label>
            <input type="text" id="judul" name="judul" placeholder="masukan judul.."
            value="<?=$brt["judul"];?>"> <br>
        <label for="kategori">Kategori Berita</label> 
            <select name="kategori" id="kategori">
                <option value="">Pilih Kategori</option>
                <?php while($row1 = mysqli_fetch_array($result1)):;?>
                    <option value="<?php echo $row1[0];?>"><?php echo $row1[1];?></option>
                <?php endwhile;?>
            </select> <br>
                    <label name = "isi" id=""><?php echo $brt["isi"]?></label><br>
            <label for="isi" id="isi">Isi Berita</label> <br>
                <div class="isi-berita-textarea">
                    <!-- <textarea id="isi" name="isi" style="width:100%; height:300px;"></textarea> -->
                    <textarea class="ckeditor" id="isi" name="isi" required></textarea>
                </div>
        <label for="gambar">Gambar Berita</label> 
            <input type="file" id="gambar" name="gambar"> <br>
        <img src="../upload/<?=$brt ['gambar'];?>" width="40"> <br>
        <input type="submit"name="submit" value="Ubah Data!">
    </ul>
</form>
</html>