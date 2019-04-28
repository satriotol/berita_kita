<?php
require 'admin/function.php';
include 'header.php';
$slide_gbr = query("SELECT * FROM slide")[0];
$slide_gbr2 = query("SELECT * FROM slide")[1];
$slide_gbr3 = query("SELECT * FROM slide")[2];
$slide_gbr4 = query("SELECT * FROM slide")[3];
$jumlahDataPerHalaman = 5;
$jumlahData = count(query("SELECT * FROM berita"));
$jumlahHalaman = ceil($jumlahData / $jumlahDataPerHalaman);
$halamanAktif = (isset($_GET["halaman"])) ? $_GET["halaman"] : 1;
$awalData = ($jumlahDataPerHalaman * $halamanAktif) -$jumlahDataPerHalaman;
$index = query("SELECT kategori.*,berita.* FROM berita LEFT JOIN kategori on berita.kategori = kategori.id_kategori 
ORDER BY berita.id DESC LIMIT $awalData,$jumlahDataPerHalaman");
$subberita = query("SELECT * FROM subberita ORDER BY subberita.id_subberita DESC");
$video = query("SELECT * FROM video");

?>
<!DOCTYPE html>
<html lang="en">

</head>

<body id="page-top">
    <!-- Header -->
    <header>
        <div class="container-fluid">
            <div class="slider-container">
                <div class="owl-slider owl-carousel">
                    <div class="item">
                        <div class="owl-slider-item">
                            <img src="upload/<?=$slide_gbr["slide_gambar"]; ?>" class="img-responsive"
                            alt="portfolio">
                            <div class="intro-text">
                                <input type="hidden" name="id_slide" value="<?=$slide_gbr["id_slide"]; ?>">
                                <div class="intro-lead-in">
                                    <label for="main_judul">
                                        <?=$slide_gbr["main_judul"]; ?></label>
                                </div>
                                <div class="intro-heading">
                                    <label for="sub_judul">
                                        <?=$slide_gbr["sub_judul"]; ?></label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="owl-slider-item">
                            <img src="upload/<?=$slide_gbr2["slide_gambar"]; ?>" class="img-responsive"
                            alt="portfolio">
                            <div class="intro-text">
                                <input type="hidden" name="id_slide" value="<?= $slide_gbr2["id_slide"]; ?>">
                                <div class="intro-lead-in">
                                    <label for="main_judul">
                                        <?=$slide_gbr2["main_judul"]; ?></label>
                                </div>
                                <div class="intro-heading">
                                    <label for="sub_judul">
                                        <?=$slide_gbr2["sub_judul"]; ?></label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="owl-slider-item">
                            <img src="upload/<?= $slide_gbr3["slide_gambar"]; ?>" class="img-responsive"
                            alt="portfolio">
                            <div class="intro-text">
                                <input type="hidden" name="id_slide" value="<?= $slide_gbr3["id_slide"]; ?>">
                                <div class="intro-lead-in">
                                    <label for="main_judul">
                                        <?=$slide_gbr3["main_judul"]; ?></label>
                                </div>
                                <div class="intro-heading">
                                    <label for="sub_judul">
                                        <?=$slide_gbr3["sub_judul"]; ?></label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="owl-slider-item">
                            <img src="upload/<?= $slide_gbr4["slide_gambar"]; ?>" class="img-responsive"
                            alt="portfolio">
                            <div class="intro-text">
                                <input type="hidden" name="id_slide" value="<?= $slide_gbr4["id_slide"]; ?>">
                                <div class="intro-lead-in">
                                    <label for="main_judul">
                                        <?=$slide_gbr4["main_judul"]; ?></label>
                                </div>
                                <div class="intro-heading">
                                    <label for="sub_judul">
                                        <?=$slide_gbr4["sub_judul"]; ?></label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="container-wrapper">
        <div class="main-page-header">
            <h1 class="main-page-title">PRESS RELEASE</h1>
        </div>
        <div class="main-page-container">
            <section class="posts-container">
                <?php foreach ($index as $row) : ?>
                <div class="posts-wrapper">
                    <article>
                        <div>
                            <div class="image-title-message">
                                <div class="post-image-container">
                                    <a class="post-image-container" href="lihat_berita.php?id=<?= $row["id"]; ?>">
                                        <img src="upload/<?= $row["gambar"]; ?>">
                                    </a>               
                                </div>
                                <div class="image-message-wrapper">
                                    <h3 class="post-title"><a href="lihat_berita.php?id=<?= $row["id"]; ?>">
                                            <?= $row["judul"]; ?></a></h3>
                                    <p>
                                        <?= $row["tanggal_berita"]; ?>
                                    </p>
                                    <p class="post-message" style="text-align: justify;">
                                        <?= custom_echo($row["isi"], 200); ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                <?php endforeach ?>
                <!-- halaman pagenation -->
                <div class="main-page-slider">
                    <?php if ($halamanAktif > 1) : ?>
                    <a href="?halaman=<?= $halamanAktif - 1; ?>">&#8592;</a>
                    <?php endif; ?>
                    <br>
                    <?php for ($i = 1; $i <= $jumlahHalaman; $i++) : ?>
                    <?php if ($i == $halamanAktif) : ?>
                    <a href="?halaman=<?= $i; ?>">
                        <?= $i; ?></a>
                    <?php else : ?>
                    <a href="?halaman=<?= $i; ?>">
                        <?= $i; ?></a>
                    <?php endif; ?>
                    <?php endfor; ?>
                    <?php if ($halamanAktif < $jumlahHalaman) : ?>
                    <a href="?halaman=<?= $halamanAktif + 1; ?>">&#8594;</a>
                    <?php endif; ?>
                </div>
            </section>
            <aside>
                <div class="aside-iframe-container">
                    <h2 class="video-hmptk">Video HMPTK</h2>
                    <br>
                    <?php foreach($video as $row):?>
                        <iframe src="<?=$row["link_video"] ?>" frameborder=0></iframe>
                    <br>
                    <?php endforeach?>
                    <h2 class="co-card-label-text">Pengumuman</h2>
                    <div>
                        <?php foreach($subberita as $row):?>
                        <div>
                            <h3 class="co-card">
                                <a target="_blank" href="<?=$row["link_sub"];?> "><?=$row["judul_sub"];?></a>
                            </h3>
                            <p class="co-card">
                                <?=$row["subjudul_sub"];?> 
                            </p>
                        </div>
                        <?php endforeach?>
                    </div>
                    <br>
            </aside>
        </div>
    </div>

    <div class="contact-us-wrapper" id="contact-us">
        <div class="contact-us-container1">
            <h1 style="color: white">Hubungi Kami</h1>
            <?php
                if(isset($_POST["submit"])){
                    // cek apakah data berhasil ditambahkan atau tidak
                    if(tambah_pesan($_POST)>0){
                        echo "
                        <script>
                            alert ('pesan berhasil ditambahkan!');
                            document.location.href ='index.php'
                        </script>
                        ";
                    }
                }
            ?>
            <form id="contact" action="" method="post" enctype="multipart/form-data">
                <div>
                    <div>
                        <input placeholder="Nama"type="text" name="nama_pengirim" id="nama_pengirim" required placeholder="Nama">
                    </div>
                    <div style="float: right">
                        <input placeholder="Email" type="text" name="email_pengirim" id="email_pengirim" required>
                    </div>
                </div>
                <br>
                    <textarea  placeholder="Pesan" name="isi_pesan" id="isi_pesan"required></textarea>
                <br>
                    <input type="hidden" name="tanggal_pengirim" required
                    value=<?php date_default_timezone_set("Asia/Jakarta"); echo date ("Y/m/d.h:i:sa");?>>
                    <input type="submit" name="submit" value="Kirim">
            </form>
        </div>
    </div>
    </section>
    <p id="back-top">
        <a href="#top"><i class="fa fa-angle-up"></i></a>
    </p>
    <!-- footer -->
</body>

<?php 
        include "footer.php";
        ?>

</html>