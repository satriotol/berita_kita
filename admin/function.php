<?php
$conn = mysqli_connect("localhost","root","","berita_kita");

function query($query){
    global $conn;
    $result= mysqli_query($conn,$query);
    $rows=[];
    while($row=mysqli_fetch_assoc($result)){
        $rows[]=$row;
    }
    return $rows;
}
//berita
    function tambah($data){
        global $conn;
        //ambil data dari tiap elemen dalam form
        $judul = htmlspecialchars($data["judul"]);
        $kategori = htmlspecialchars($data["kategori"]);
        // $isi = strip_tags($data["isi"],'<br>,<p>,text-align: justify;');
        $isi = nl2br($data["isi"],false);
        // $isi = $data["isi"];
        $tanggal_berita = htmlspecialchars($data["tanggal_berita"]);
        //Upload gambar
        $gambar = upload();
        if(!$gambar){
            return false;
        }
        //query insert data
        if(empty($judul && $isi && $kategori && $tanggal_berita)){
            echo "<script>
            alert('Isikan field terlebih dahulu!');
            </script>";
        return false;
        }else{
            $query = "INSERT INTO berita VALUES ('','$judul','$isi','$kategori','$gambar','$tanggal_berita')";
            mysqli_query($conn,"$query");
        }
        // $query = "INSERT INTO berita VALUES ('','$judul','$isi','$kategori','$gambar','$tanggal_berita')";
        // mysqli_query($conn,"$query");

        return mysqli_affected_rows($conn);
    }
    function upload(){

        $namaFile = $_FILES['gambar']['name'];
        $ukuranFile = $_FILES['gambar']['size'];
        $error = $_FILES['gambar']['error'];
        $tmpName = $_FILES['gambar']['tmp_name'];

        //cek apakah tidak ada gambar yang diupload
        if($error === 4){
            echo "<script>
                alert('pilih gambar terlebih dahulu!');
                </script>";
            return false;
        } 

        // cek apakah yang diupload gambar
        $ekstensiGambarValid = ['jpg','jpeg','png'];
        $ekstensiGambar = explode('.',$namaFile);
        $ekstensiGambar = strtolower (end($ekstensiGambar));
        if(!in_array($ekstensiGambar,$ekstensiGambarValid)){
            echo "<script>
            alert('Yang anda upload bukan gambar!');
            </script>";
        return false;
        }

        //cek jika ukurannya terlalu besar
        if($ukuranFile > 1000000){
            echo "<script>
            alert('Ukuran gambar terlalu besar');
            </script>";
        return false;
        }

        //lolos pengecekan,gambar siap diupload
        //generate nama gambar baru
        $namaFileBaru = uniqid();
        $namaFileBaru .='.';
        $namaFileBaru .=$ekstensiGambar;
        move_uploaded_file($tmpName,'../upload/'.$namaFileBaru);

        return $namaFileBaru;
    }
    function hapus($id){
        global $conn;
        mysqli_query($conn,"DELETE FROM berita WHERE id = $id");
        return mysqli_affected_rows($conn);
    }
    function ubah($data){
        global $conn;
        //ambil data dari tiap elemen dalam form
        $id= $data["id"];
        $judul = htmlspecialchars($data["judul"]);
        $kategori = htmlspecialchars($data["kategori"]);
        // $isi = strip_tags($data["isi"],'<br>,<p>,text-align: justify;');
        $isi = nl2br($data["isi"],false);
        // $isi = $data["isi"];
        $gambarLama = htmlspecialchars($data["gambarLama"]);

        //cek apakah user pilih gambar baru atau tidak
        if($_FILES['gambar']['error'] === 4){
            $gambar = $gambarLama;
        } else {
            $gambar = upload();

        }
        //query insert data
        $query = "UPDATE berita SET
            judul='$judul',
            kategori='$kategori',
            isi='$isi',
            gambar='$gambar'
            WHERE id = $id;
        ";
        mysqli_query($conn,"$query");

        return mysqli_affected_rows($conn);
    }
function tambah_kategori($data){
    //query insert data

    global $conn;
    $nama_kategori = htmlspecialchars($data["nama_kategori"]);
    $query = "INSERT INTO kategori VALUES ('','$nama_kategori')";
    mysqli_query($conn,"$query");
    return mysqli_affected_rows($conn);
}
function ubah_kategori($data){
    global $conn;
    //ambil data dari tiap elemen dalam form
    $id = $data["id_kategori"];
    $nama_kategori = htmlspecialchars($data["nama_kategori"]);

    //query insert data
    $query = "UPDATE kategori SET
        nama_kategori='$nama_kategori'
        WHERE id_kategori = $id; 
    ";
    mysqli_query($conn,"$query");

    return mysqli_affected_rows($conn);
}
function hapus_kategori($id){
    global $conn;
    mysqli_query($conn,"DELETE FROM kategori WHERE id_kategori = $id");
    return mysqli_affected_rows($conn);
}
//admin
    function tambah_admin($data){
        global $conn;
        $nama_admin = htmlspecialchars($data["nama_admin"]);
        $user_admin = strtolower(stripslashes ($data["user_admin"]));
        $pass_admin = mysqli_real_escape_string($conn,$data["pass_admin"]);
        $pass_admin2= mysqli_real_escape_string($conn,$data["pass_admin2"]); 
    //cek username sudah ada atau belum
        $result = mysqli_query($conn, "SELECT user_admin FROM admin 
            WHERE user_admin = '$user_admin'");
        if (mysqli_fetch_assoc($result)){
            echo "<script>
                alert ('username sudah pernah terpakai, buat lagi!')
                </script>";
            return false;
        }
    //cek konfirmasi password
        if($pass_admin !== $pass_admin2){
            echo "<script>
                alert('konfirmasi password tidak sesuai');
                </script>";
            return false();
        }
    //enkripsi password
        $pass_admin = password_hash($pass_admin, PASSWORD_DEFAULT);
    //tambahkan user baru ke database
        mysqli_query($conn, "INSERT INTO 
        admin VALUES('','$nama_admin','$user_admin','$pass_admin')");

        return mysqli_affected_rows($conn);
    }
    function ubah_admin($data) {
        global $conn;
        $query = mysqli_query($conn, "SELECT user_admin FROM admin WHERE user_admin = '$user_admin'");
    }
    function hapus_admin($id){
        global $conn;
        mysqli_query($conn,"DELETE FROM `admin` WHERE `id_admin` = $id");
        return mysqli_affected_rows($conn);
    }
//maksimal karakter
    function custom_echo($x, $length)
    {
        if(strlen($x)<=$length)
        {
            echo $x;
        }
        else
        {
            $y=substr($x,0,$length) . '...';
            echo $y;
        }
    }
//slide
    function tambah_slide_gambar($data)
    {
        global $conn;
        $main_judul = htmlspecialchars($data["main_judul"]);
        $sub_judul = htmlspecialchars($data["sub_judul"]);
        $slide_gambar = slide_upload();
        if(!$slide_gambar){
            return false;
        }
        $query = "INSERT INTO slide VALUES ('','$main_judul','$sub_judul','$slide_gambar')";
        mysqli_query($conn,"$query");

        return mysqli_affected_rows($conn);
    }
    function slide_upload(){
        $namaFile = $_FILES['slide_gambar']['name'];
        $ukuranFile = $_FILES['slide_gambar']['size'];
        $error = $_FILES['slide_gambar']['error'];
        $tmpName = $_FILES['slide_gambar']['tmp_name'];
        $fileinfo = getimagesize($_FILES['slide_gambar']['tmp_name']);
        $filewidth = $fileinfo[0];
        $fileheight = $fileinfo[1];
        //cek apakah tidak ada gambar yang diupload
        if($error === 4){
            echo "<script>
                alert('pilih gambar terlebih dahulu!');
                </script>";
            return false;
        } 

        // cek apakah yang diupload gambar
        $ekstensiGambarValid = ['jpg','jpeg','png'];
        $ekstensiGambar = explode('.',$namaFile);
        $ekstensiGambar = strtolower (end($ekstensiGambar));
        if(!in_array($ekstensiGambar,$ekstensiGambarValid)){
            echo "<script>
            alert('Yang anda upload bukan gambar!');
            </script>";
        return false;
        }

        if($ukuranFile > 1000000){
            echo "<script>
            alert('Ukuran gambar terlalu besar');
            </script>";
        return false;
        }

        if($filewidth != "1920" && $fileheight != "920")
        {
            echo "<script>
            alert('Tinggi harus 1920px dan Lebar harus 920px');
            </script>";
            return false;
        }

        //lolos pengecekan,gambar siap diupload
        //generate nama gambar baru
        $namaFileBaru = uniqid();
        $namaFileBaru .='.';
        $namaFileBaru .=$ekstensiGambar;
        move_uploaded_file($tmpName,'../upload/'.$namaFileBaru);

        return $namaFileBaru;
    }
    function hapus_slide($id_slide){
        global $conn;
        mysqli_query($conn,"DELETE FROM slide WHERE id_slide = $id_slide");
        return mysqli_affected_rows($conn);
    }
    function ubah_slide($data){
        global $conn;
        //ambil data dari tiap elemen dalam form
        $id_slide= $data["id_slide"];
        $main_judul = htmlspecialchars($data["main_judul"]);
        $sub_judul = htmlspecialchars($data["sub_judul"]);
        $slide_lama = htmlspecialchars($data["slide_lama"]);

        //cek apakah user pilih gambar baru atau tidak
        if($_FILES['slide_gambar']['error'] === 4){
            $slide_gambar = $slide_lama;
        } else {
            $slide_gambar = slide_upload();

        }
        //query insert data
        $query = "UPDATE slide SET
            main_judul='$main_judul',
            sub_judul='$sub_judul',
            slide_gambar='$slide_gambar'
            WHERE id_slide = $id_slide;
        ";
        mysqli_query($conn,"$query");

        return mysqli_affected_rows($conn);
    }
//alumni
    function tambah_alumni($data)
        {
        global $conn;
        $nama_lengkap = htmlspecialchars($data["nama_lengkap"]);
        $email = htmlspecialchars($data["email"]);
        $alamat_sekarang = htmlspecialchars($data["alamat_sekarang"]);
        $nomer_telepon = htmlspecialchars($data["nomer_telepon"]);
        $alamat_perusahaan = htmlspecialchars($data["alamat_perusahaan"]);
        $jenjang = htmlspecialchars($data["jenjang"]);
        $query = "INSERT INTO alumni VALUES ('','$nama_lengkap', '$email', '$alamat_sekarang','$nomer_telepon', '$alamat_perusahaan', '$jenjang')";
        mysqli_query($conn,"$query");

        return mysqli_affected_rows($conn);
    }
    function lihat_admin($data){
        global $conn;
        //ambil data dari tiap elemen dalam form
        $id = $data["id_alumni"];
        $nama_alumni = htmlspecialchars($data["nama_alumni"]);
    
        //query insert data
        $query = "UPDATE alumni SET
            nama_alumni='$nama_alumni'
            WHERE id_alumni = $id; 
        ";
        mysqli_query($conn,"$query");
    
        return mysqli_affected_rows($conn);
    }

//subberita
    function tambah_subberita($data){
        global $conn;
        $judul_sub = htmlspecialchars($data["judul_sub"]);
        $subjudul_sub = htmlspecialchars($data["subjudul_sub"]);
        $link_sub = htmlspecialchars($data["link_sub"]);

        if(empty($judul_sub && $subjudul_sub && $link_sub)){
            echo "<script>
            alert('Isikan field terlebih dahulu!');
            </script>";
        return false;
        }else{
            $query = "INSERT INTO subberita VALUES ('','$judul_sub','$subjudul_sub','$link_sub')";
            mysqli_query($conn,"$query");
        }

        return mysqli_affected_rows($conn);
    }
    function hapus_subberita($id){
        global $conn;
        mysqli_query($conn,"DELETE FROM subberita WHERE id_subberita = $id");
        return mysqli_affected_rows($conn);
    }
    function ubah_subberita($data){
        global $conn;
        $id_subberita   = $data["id_subberita"];
        $judul_sub      = htmlspecialchars($data["judul_sub"]);
        $subjudul_sub   = htmlspecialchars($data["subjudul_sub"]);
        $link_sub       = htmlspecialchars($data["link_sub"]);
        //query insert data
        $query = "UPDATE subberita SET
            judul_sub='$judul_sub',
            subjudul_sub='$subjudul_sub',
            link_sub='$link_sub'
            WHERE id_subberita = $id_subberita;
        ";
        mysqli_query($conn,"$query");

        return mysqli_affected_rows($conn);
    }
    function tambah_pesan($data){
        global $conn;
        $nama_pengirim = htmlspecialchars($data["nama_pengirim"]);
        $email_pengirim = htmlspecialchars($data["email_pengirim"]);
        $isi_pesan = htmlspecialchars($data["isi_pesan"]);
        $tanggal_pengirim = htmlspecialchars($data["tanggal_pengirim"]);
    
        $query = "INSERT INTO pesan_pengirim VALUES ('','$nama_pengirim','$email_pengirim','$isi_pesan','$tanggal_pengirim')";
        mysqli_query($conn,"$query");
    
        return mysqli_affected_rows($conn);
        }
//Video
    function tambah_video($data)
    {
        global $conn;
        $nama_video = htmlspecialchars($data["nama_video"]);
        $link_video = htmlspecialchars($data["link_video"]);

        if(empty($nama_video && $link_video)){
            echo "<script>
            alert('Isikan field terlebih dahulu!');
            </script>";
        return false;
        }else
        {
            $query = "INSERT INTO video VALUES ('','$nama_video','$link_video')";
            mysqli_query($conn,"$query");
            
        return mysqli_affected_rows($conn);
        }
    }
    function hapus_video($id){
        global $conn;
        mysqli_query($conn,"DELETE FROM video WHERE id_video = $id");
        return mysqli_affected_rows($conn);
    }
?>